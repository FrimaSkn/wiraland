<?php

namespace App\Http\Controllers;

use App\Models\EmailSubscription;
use App\Settings\SettingProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Show the product page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(SettingProduct $settings)
    {
        return view('product', ['settings' => $settings]);
    }

    public function downloadProductCatalogue(Request $request, SettingProduct $settings)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        DB::beginTransaction();
        try {
            $subscription = EmailSubscription::firstOrCreate(
                ['email' => $validated['email']],
                ['downloaded_catalogue' => 0]
            )->increment('downloaded_catalogue');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            DB::rollBack();
        }
        DB::commit();

        // Return the file download response
        $filePath = Storage::disk('public_pages')->path($settings->product_catalogue);
        return response()->download($filePath, 'wiraland-product-catalogue.pdf');

    }
}
