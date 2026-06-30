<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Menu;
use App\Models\User;
use App\Models\Socmed;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ServiceCatalog;
use App\Models\ServiceProduct;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    private $menus;
    private $contact;

    function __construct()
    {
        $this->menus = Menu::with('submenu')->where('status', 'active')->whereNull('parent_id')->get();
        $this->contacts = Contact::where('status', 'active')->get();
        $this->socmeds = Socmed::where('status', 'active')->get();
    }

    public function coomingSoon()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Coming Soon';

        return view('front-end.coming-soon', compact('menus', 'contacts', 'socmeds', 'pageTitle'));
    }

    public function term()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Terms';

        return view('front-end.term', compact('menus', 'contacts', 'socmeds', 'pageTitle'));
    }
    
    public function help()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Help';

        return view('front-end.help', compact('menus', 'contacts', 'socmeds', 'pageTitle'));
    }
    
    public function credit()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Credit';

        return view('front-end.credit', compact('menus', 'contacts', 'socmeds', 'pageTitle'));
    }
    
    public function index()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Home';

        $services = Service::where('status', 'active')->get();
        $serviceCatalogs = ServiceCatalog::with('product')->where([
            'status' => 'available',
        ])->get();
        // ['slug', 'like', '%mobile-legends%'],

        $userCount = User::count();

        $transactions = Transaction::where('status', 'PAID')->with('catalog', 'product')->get();

        $trendings = [];
        $trendingRaws = [];

        foreach ($transactions as $transactionKey => $transaction) {
            @$trendingRaws[$transaction->service_product_code][] = $transaction;
        }

        $index = 0;
        foreach ($trendingRaws as $rawKey => $raw) {
            @$trendings[$index] = [
                'catalog' => $raw[0]->catalog,
                'product' => $raw[0]->product,
                'count' => count($raw)
            ];

            $index++;
        }
        
        $trendings = collect($trendings)->sortByDesc('count')->skip(0)->take(5);

        return view('front-end.index', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'services', 'serviceCatalogs', 'userCount', 'transactions', 'trendings'));
    }
    
    public function about()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Tentang Kami';

        return view('front-end.about', compact('menus', 'contacts', 'socmeds', 'pageTitle'));
    }
    
    public function service()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Layanan Kami';

        $services = Service::where('status', 'active')->get();

        return view('front-end.service', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'services'));
    }
    
    public function serviceDetail($slug, Request $request)
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        if($slug != 'game-streaming'){
            return redirect('coming-soon');
        }

        $req = $request->all();

        $service = Service::where('slug', $slug)->first();

        $serviceCatalogs = ServiceCatalog::with('product')->where(function($query) use($req){
            if(isset($req['name']) && !empty($req['name'])){
                $query->where('name', 'like', '%'. $req['name'] .'%');
            }
            if(isset($req['category']) && !empty($req['category'])){
                $query->where('main_category', $req['category']);
            }
        })->where([
            'status' => 'available',
        ])->get();
        // ['slug', 'like', '%mobile-legends%'],
        
        $categoryRaw = ServiceCatalog::with('product')->where([
            'status' => 'available',
        ])->get();
        // ['slug', 'like', '%mobile-legends%'],

        $categories = [];
        foreach ($categoryRaw as $catalogKey => $catalog) {
            $categories[$catalog->main_category][] = $catalog;
        }

        $otherCatalogs = ServiceCatalog::with('product')->where([
            'category' => $slug,
            'status' => 'available',
        ])->orderBy('id', 'desc')->limit(4)->get();
        // ['slug', 'like', '%mobile-legends%']

        $pageTitle = $service->name;

        return view('front-end.service-detail', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'service', 'serviceCatalogs', 'req', 'categories', 'otherCatalogs'));
    }
    
    public function servicePurchase($slug, $game, Request $request)
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        if($slug != 'game-streaming'){
            return redirect('coming-soon');
        }

        $req = $request->all();

        $dice = rand(1,6);

        $gameValue = str_replace('-', ' ', $game);
        $gameValue = ucwords($gameValue);

        if($dice == 2){

            // update service
            // URL target API eksternal
            $url = 'https://vip-reseller.co.id/api/game-feature';
    
            // Data yang akan dikirim dalam format form-data
            $data = [
                'key' => 'W4uNHgxo3DmWXTER3T8BRWLEw9W7L83XWekwXP6MQchmDCrDf854PN19BpNIW6ty',
                'sign' => '08c23fd21ed9f6a71a2acd1e94d5f857',
                'type' => 'services',
                'filter_type' => 'game',
                'filter_value' => $gameValue,
            ];
    
            // Inisialisasi cURL
            $curl = curl_init($url);
    
            // Konfigurasi cURL
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
            // Eksekusi cURL untuk mengirim permintaan
            $response = curl_exec($curl);
    
            // Periksa apakah permintaan berhasil
            if ($response === false) {
                // echo 'Error: ' . curl_error($curl);
            } else {
                // Tangani respons dari API
                $responseData = json_decode($response, true);
                if ($responseData) {
                    // Lakukan sesuatu dengan data respons
                    foreach ($responseData['data'] as $serviceKey => $service) {
    
                        $buyPrice = ceil($service['price']['special']);
    
                        // $profit = ceil(($buyPrice * 5/100) + $buyPrice);
                        $profit = ceil(($buyPrice * 4/100) - ($buyPrice * 2/100) + $buyPrice);
                        $price = ceil($profit + ($profit * 1/100));
                        $finalProfit = ceil($price - ceil($price * 0.7/100) - $buyPrice);
    
                        ServiceProduct::where('code', $service['code'])->update([
                            'status' => $service['status'],
                            'profit_price' => $profit,
                            'price' => $price,
                            'profit' => $finalProfit,
                        ]);
                    }
                } else {
                    // echo 'Tidak dapat mem-parsing respons JSON.';
                }
            }
            // end update service

        }
        
        $service = Service::where('slug', $slug)->first();

        $serviceCatalog = ServiceCatalog::with('productHigh')->where([
            'status' => 'available',
            'category' => $slug,
            'slug' => $game,
        ])->first();
        
        $serviceProductRaws = [];
        foreach ($serviceCatalog->productHigh as $productKey => $product) {
            $serviceProductRaws[$product->name] = $product;
        }

        $otherCatalogs = ServiceCatalog::with('product')->where([
            ['slug', '!=', $game],
            'category' => $slug,
            'status' => 'available',
        ])->orderBy('id', 'desc')->limit(4)->get();
        // ['slug', 'like', '%mobile-legends%']

        $serviceProductRaws = array_reverse($serviceProductRaws);

        $serviceProducts = [];
        $index = 0;
        foreach ($serviceProductRaws as $rawKey => $raw) {
            $serviceProducts[$index] = $raw;

            $index++;
        }

        $allTransactions = Transaction::with('catalog', 'product')->where('service_catalog_slug', $game)->count();
        $transactions = Transaction::with('catalog', 'product')->where('service_catalog_slug', $game)->orderBy('id', 'desc')->limit(10)->get();
        
        $pageTitle = $service->name;

        return view('front-end.service-purchase', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'service', 'serviceCatalog', 'req', 'otherCatalogs', 'serviceProducts', 'transactions', 'allTransactions'));
    }

    public function transaction()
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $pageTitle = 'Transaksi';

        $transactions = Transaction::with('catalog', 'product')->where('status', '!=', 'EXPIRED')->orderBy('id', 'desc')->limit(5)->get();

        return view('front-end.transaction', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'transactions'));
    }
    
    public function transactionList(Request $request)
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;
        
        $pageTitle = 'Transaksi';

        $transactions = Transaction::with('catalog', 'product')->where('status', '!=', 'EXPIRED')->orderBy('id', 'desc')->limit(100)->get();
        
        return view('front-end.transaction-list', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'transactions'));
    }

    public function transactionDetail($invoiceId, Request $request)
    {
        $menus = $this->menus;
        $contacts = $this->contacts;
        $socmeds = $this->socmeds;

        $transaction = Transaction::with('catalog', 'product')->where('invoice_id', $invoiceId)->first();

        if(empty($transaction)){
           return redirect('transaction');
        }

        $pageTitle = 'Transaksi ' . $transaction->invoice_id;

        $responseData = NULL;

        try {
            // URL target API eksternal
            $url = 'https://vip-reseller.co.id/api/game-feature';
    
            // Data yang akan dikirim dalam format form-data
            $data = [
                'key' => 'W4uNHgxo3DmWXTER3T8BRWLEw9W7L83XWekwXP6MQchmDCrDf854PN19BpNIW6ty',
                'sign' => '08c23fd21ed9f6a71a2acd1e94d5f857',
                'type' => 'status',
                'trxid' => $transaction->vip_invoice,
            ];
    
            // Inisialisasi cURL
            $curl = curl_init($url);
    
            // Konfigurasi cURL
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
            // Eksekusi cURL untuk mengirim permintaan
            $response = curl_exec($curl);
    
            // Periksa apakah permintaan berhasil
            if ($response === false) {
                echo 'Error: ' . curl_error($curl);
            } else {
                // Tangani respons dari API
                $responseData = json_decode($response, true);
                if ($responseData) {
                    // Lakukan sesuatu dengan data respons
                    // dd($responseData);
    
                    // if(!empty($responseData['data'])){
    
                    //     Transaction::where('invoice_id', $request->order_id)->update([
                    //         'vip_invoice' => $responseData['data']['trxid'],
                    //     ]);
    
                    // }
    
    
                } else {
                    echo 'Tidak dapat mem-parsing respons JSON.';
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return view('front-end.transaction-detail', compact('menus', 'contacts', 'socmeds', 'pageTitle', 'transaction', 'responseData'));
    }
    
}
