<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\User;
use App\Produk;
use App\Penjualan_produk;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');

    }

    public function getCharts()
    {
        $yearNow;
        //Buat chart dengan bikin  manual, tiap dataset valuenya pake array
        //Produk1 -> Jaket Kulit               
        
        $datasets_jan = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',1)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_feb = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',2)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mar = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',3)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_apr = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',4)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mei = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',5)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jun = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',6)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jul = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',7)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_aug = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',8)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_sep = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',9)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_okt = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',10)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_nov = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',11)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_des = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',12)->where('tahun','2017')->pluck('jumlah')->toArray();
        
        $data1 = array(array_sum($datasets_jan), array_sum($datasets_feb),array_sum($datasets_mar), array_sum($datasets_apr), array_sum($datasets_mei),array_sum($datasets_jun), array_sum($datasets_jul), array_sum($datasets_aug), array_sum($datasets_sep), array_sum($datasets_okt), array_sum($datasets_nov), array_sum($datasets_des));
        //dd($datasets);                
        
        //Produk2 -> Tas Kulit               
        
        $datasets_jan2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',1)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_feb2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',2)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mar2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',3)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_apr2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',4)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mei2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',5)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jun2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',6)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jul2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',7)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_aug2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',8)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_sep2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',9)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_okt2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',10)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_nov2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',11)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_des2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',12)->where('tahun','2017')->pluck('jumlah')->toArray();
        
        $data2 = array(array_sum($datasets_jan2), array_sum($datasets_feb2),array_sum($datasets_mar2), array_sum($datasets_apr2), array_sum($datasets_mei2),array_sum($datasets_jun2), array_sum($datasets_jul2), array_sum($datasets_aug2), array_sum($datasets_sep2), array_sum($datasets_okt2), array_sum($datasets_nov2), array_sum($datasets_des2));
        //dd($datasets);

        //Produk 3 -> Sepatu kulit                      
        $datasets_jan3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',1)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_feb3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',2)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mar3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',3)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_apr3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',4)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mei3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',5)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jun3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',6)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jul3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',7)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_aug3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',8)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_sep3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',9)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_okt3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',10)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_nov3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',11)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_des3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',12)->where('tahun','2017')->pluck('jumlah')->toArray();
        
        $data3 = array(array_sum($datasets_jan3), array_sum($datasets_feb3),array_sum($datasets_mar3), array_sum($datasets_apr3), array_sum($datasets_mei3),array_sum($datasets_jun3), array_sum($datasets_jul3), array_sum($datasets_aug3), array_sum($datasets_sep3), array_sum($datasets_okt3), array_sum($datasets_nov3), array_sum($datasets_des3));

        //Produk 4 -> Ikat Pinggang 
        $datasets_jan4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',1)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_feb4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',2)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mar4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',3)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_apr4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',4)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_mei4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',5)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jun4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',6)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_jul4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',7)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_aug4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',8)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_sep4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',9)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_okt4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',10)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_nov4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',11)->where('tahun','2017')->pluck('jumlah')->toArray();
        $datasets_des4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',12)->where('tahun','2017')->pluck('jumlah')->toArray();
        
        $data4 = array(array_sum($datasets_jan4), array_sum($datasets_feb4),array_sum($datasets_mar4), array_sum($datasets_apr4), array_sum($datasets_mei4),array_sum($datasets_jun4), array_sum($datasets_jul4), array_sum($datasets_aug4), array_sum($datasets_sep4), array_sum($datasets_okt4), array_sum($datasets_nov4), array_sum($datasets_des4));


        //$dataset1 = Penjualan_produk::all();
        // $data1 = array(array_sum($datasets_jan), array_sum($datasets_feb),array_sum($datasets_mar), array_sum($datasets_apr), array_sum($datasets_mei),array_sum($datasets_jun), array_sum($datasets_jul), array_sum($datasets_aug), array_sum($datasets_sep), array_sum($datasets_okt), array_sum($datasets_nov), array_sum($datasets_des));
        //dd($data1);
        $chart = Charts::multi('bar', 'chartjs')
                        ->title('Grafik Penjualan Produk 2017')
                        ->labels(['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DES'])
                        ->colors(['#01579B', '#DD2C00', '#FFD600', '#2E7D32'])
                        ->dataset('Tas Kulit', $data2)
                        ->dataset('Jaket Kulit', $data1)
                        ->dataset('Sepatu Kulit', $data3)
                        ->dataset('Ikat Pinggang Kulit', $data4);


        // $chart = Charts::create('bar','material')
        //                 ->title('Grafik Penjualan Produk')
        //                 ->elementLabel('Total Harga Jual')
        //                 ->values($dataset1->pluck('jumlah'))
        //                 ->labels($dataset1->pluck('bulan'))
        //                 ->responsive(true);        



        // $dataset1 = Penjualan_produk::select('total_hargajual', 'created_at');        
        // $chart = Charts::database($dataset1,'bar', 'highcharts')                                                                                    
        //                     // ->dataset('Harga Jual', Produk::all()->pluck('harga_jual'))
        //                     ->elementLabel("total penjualan")                            
        //                     ->groupBy('id_penjualan','total_hargajual',['Jan', 'Feb'])
        //                     ;
                                                                                    

        // $bulan = date('m') - 1; // biar bulannya sesuai di array --> array mulai dari 0
        // $tahun = date('Y');
        // $year = date('Y');
        // $years = array($year, $year-1, $year-2, $year-3, $year-4, $year-5);
        // $months = array("Januari","Februari", "Maret", "April","Mei","Juni","Juli","Agustus","September","Oktober","November", "Desember");
        // $month = $months[$bulan]; //retrieve bulan
        // $produks = \DB::table('transactions')->where('bulan', $bulan+1)->where('tahun', $tahun)->get();
                                    
        // $chart = Charts::database($produks, 'bar', 'highcharts')
        
        //                   ->title("Penjualan Produk Per Bulan")
        
        //                   ->elementLabel("Total Penjualan")
        
        //                   ->dimensions(1000, 500)
        
        //                   ->responsive(true)
        
        //                   ->groupByMonth(date('Y'), true);
         return view('home',compact('chart'));
    }

    
}
