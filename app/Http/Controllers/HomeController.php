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
        
        $chart2 = Charts ::multi('bar', 'chartjs')
                        ->title('Grafik Keuntungan Penjualan 2017')
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
         return view('home',compact(['chart', 'chart2']));
    }
//=====================================================WORKING PARAM, NOT OPTIMIZED=====================================================================
    public function getChartsWithParam($tahun)    
    {    //Still wrong =================================    
        // $datadb = Penjualan_produk::all()->
        //dd($datdb);
        
        // $datas = Penjualan_produk::all();        
        
        $yearNow = $tahun;        
        // $jumlahtotal = 0;
        // $hasils = array();
        // $keuntungannew1 = array();

        //Failed way =======================================================
        for($j = 0; $j<4; $j++){
            for($i=0;$i<12;$i++){
                $datasets[$j][$i] = DB::table('penjualan_produks')->where('id_produk',$j+1)->where('bulan',$i+1)->where('tahun',$yearNow)->get(['total_hargabeli','total_hargajual'])->toArray();
            }
        }        
        //dd($datasets);
        // foreach ($datasets as $key => $value) {
        //     hasil[] = $value->
        // }
        
        // $datasetsnew1 = $datasets[1];
        // $datasetsnew2 = $datasets[2];
        // $datasetsnew3 = $datasets[3];
        // $datasetsnew4 = $datasets[4];
        //dd(strval($datasetsnew1[2][0]->total_hargajual));

    //gagal juga wkwkw
        // for($i=0; $i <12 ; $i++){
        //     $keuntungannew1[$i] = strval($datasetsnew1[$i][0]->total_hargajual) - strval($datasetsnew1[$i][0]->total_hargabeli);
        // }
        
      
        
        // dd($keuntungannew1);
                
        //dd($datasetnew1[0]->total_hargajual);
        // foreach($datasets as dataset){
        //     $hasils[] = $dataset
        // }
                
        // foreach ($datas as $data) {
        //     $hasils[] = $data->total_hargajual - $data->total_hargabeli;                        
        // }        
        // foreach($hasils as $hasil){
        //     $jumlahtotal += $hasil;            
        // }
        // dd($jumlahtotal);
        //dd($yearNow);
        //End Of failed ways ==========================================================================
//Almost got it
        //$datasets_beli = array();
        // for($i=0;$i<12;$i++){
        //              $datasets_beli[$i] = DB::table('penjualan_produks')->where('id_produk',1)->where('bulan',$i)->where('tahun',$yearNow)->get(['total_hargabeli','total_hargajual'])->toArray();                     
        //          }
        // //dd($datasets_beli[4]);
        // for($i=0; $i<12; $i++){
        //     $newdatasets[] = $datasets_beli[1][0]->total_hargajual - $datasets_beli[1][0]->total_hargabeli;
        // }
        // dd($newdatasets);

//foreach 4 kali
        foreach ($datasets as $key => $value1) {
            foreach ($value1 as $key => $value2) {
                $hasils[] = $value2;
                }
                
            }
//almost right, returns 42 records
            // foreach ($datasets as $key => $value1) {
            //     foreach ($value1 as $key => $value2) {
            //         foreach ($value2 as $key => $value3) {
            //             $hasils[] = $value3;
            //             }
            //         }
                    
            //     }
 
//SUCCESS          
        foreach ($hasils as $key => $value) {
            if($value==NULL){
                //$hasilakhir[] = 0;
                $hasilkeuntungan[] = 0;
            }
            else{
                $hasilakhirjual[] = $value[0]->total_hargajual;
                $hasilakhirbeli[] = $value[0]->total_hargabeli;
                $hasilkeuntungan[] = $value[0]->total_hargajual - $value[0]->total_hargabeli;
            }
        }
        for($i=0;$i<12; $i++){
            $setdata[] = $hasilkeuntungan[$i];
        }
        for($i=12;$i<24; $i++){
            $setdata2[] = $hasilkeuntungan[$i];
        }
        for($i=24;$i<36; $i++){
            $setdata3[] = $hasilkeuntungan[$i];
        }
        for($i=36;$i<48; $i++){
            $setdata4[] = $hasilkeuntungan[$i];
        }
        //dd($setdata4);
        //dd($hasilkeuntungan);
        //dd($setdata);

        // if($hasils[0]==NULL){
        //     dd($hasils[4][0]->total_hargajual);
        // }
        
        //Buat chart dengan bikin  manual, tiap dataset valuenya pake array
        //Produk1 -> Jaket Kulit               
        
        $datasets_jan = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',1)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_feb = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',2)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mar = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',3)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_apr = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',4)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mei = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',5)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jun = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',6)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jul = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',7)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_aug = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',8)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_sep = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',9)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_okt = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',10)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_nov = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',11)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_des = DB::table('penjualan_produks')->where('id_produk','1')->where('bulan',12)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        
        $data1 = array(array_sum($datasets_jan), array_sum($datasets_feb),array_sum($datasets_mar), array_sum($datasets_apr), array_sum($datasets_mei),array_sum($datasets_jun), array_sum($datasets_jul), array_sum($datasets_aug), array_sum($datasets_sep), array_sum($datasets_okt), array_sum($datasets_nov), array_sum($datasets_des));
        //dd($data1);                
        
        //Produk2 -> Tas Kulit               
        
        $datasets_jan2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',1)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_feb2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',2)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mar2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',3)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_apr2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',4)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mei2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',5)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jun2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',6)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jul2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',7)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_aug2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',8)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_sep2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',9)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_okt2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',10)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_nov2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',11)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_des2 = DB::table('penjualan_produks')->where('id_produk','2')->where('bulan',12)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        
        $data2 = array(array_sum($datasets_jan2), array_sum($datasets_feb2),array_sum($datasets_mar2), array_sum($datasets_apr2), array_sum($datasets_mei2),array_sum($datasets_jun2), array_sum($datasets_jul2), array_sum($datasets_aug2), array_sum($datasets_sep2), array_sum($datasets_okt2), array_sum($datasets_nov2), array_sum($datasets_des2));
        //dd($data2);

        //Produk 3 -> Sepatu kulit                      
        $datasets_jan3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',1)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_feb3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',2)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mar3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',3)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_apr3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',4)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mei3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',5)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jun3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',6)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jul3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',7)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_aug3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',8)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_sep3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',9)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_okt3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',10)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_nov3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',11)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_des3 = DB::table('penjualan_produks')->where('id_produk','3')->where('bulan',12)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        
        $data3 = array(array_sum($datasets_jan3), array_sum($datasets_feb3),array_sum($datasets_mar3), array_sum($datasets_apr3), array_sum($datasets_mei3),array_sum($datasets_jun3), array_sum($datasets_jul3), array_sum($datasets_aug3), array_sum($datasets_sep3), array_sum($datasets_okt3), array_sum($datasets_nov3), array_sum($datasets_des3));

        //Produk 4 -> Ikat Pinggang 
        $datasets_jan4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',1)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_feb4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',2)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mar4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',3)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_apr4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',4)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_mei4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',5)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jun4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',6)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_jul4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',7)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_aug4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',8)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_sep4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',9)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_okt4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',10)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_nov4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',11)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        $datasets_des4 = DB::table('penjualan_produks')->where('id_produk','4')->where('bulan',12)->where('tahun',$yearNow)->pluck('jumlah')->toArray();
        
        $data4 = array(array_sum($datasets_jan4), array_sum($datasets_feb4),array_sum($datasets_mar4), array_sum($datasets_apr4), array_sum($datasets_mei4),array_sum($datasets_jun4), array_sum($datasets_jul4), array_sum($datasets_aug4), array_sum($datasets_sep4), array_sum($datasets_okt4), array_sum($datasets_nov4), array_sum($datasets_des4));


        //$dataset1 = Penjualan_produk::all();
        // $data1 = array(array_sum($datasets_jan), array_sum($datasets_feb),array_sum($datasets_mar), array_sum($datasets_apr), array_sum($datasets_mei),array_sum($datasets_jun), array_sum($datasets_jul), array_sum($datasets_aug), array_sum($datasets_sep), array_sum($datasets_okt), array_sum($datasets_nov), array_sum($datasets_des));
        //dd($data1);
        $chart = Charts::multi('bar', 'highcharts')
                        ->title('Grafik Penjualan Produk '.$yearNow)
                        ->labels(['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DES'])
                        ->colors(['#01579B', '#DD2C00', '#FFD600', '#2E7D32'])
                        ->dataset('Tas Kulit', $data2)
                        ->dataset('Jaket Kulit', $data1)
                        ->dataset('Sepatu Kulit', $data3)
                        ->dataset('Ikat Pinggang Kulit', $data4)
                        ->elementLabel('Dalam Unit');
        
        $chart2 = Charts ::multi('bar', 'highcharts')
                        ->title('Grafik Keuntungan Penjualan '.$yearNow)
                        ->labels(['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DES'])
                        ->colors(['#01579B', '#DD2C00', '#FFD600', '#2E7D32'])
                        ->dataset('Tas Kulit', $setdata2)
                        ->dataset('Jaket Kulit', $setdata)
                        ->dataset('Sepatu Kulit', $setdata3)
                        ->dataset('Ikat Pinggang Kulit', $setdata4)
                        // ->dataset('Bonus1', [10,10,10,10,10,10,10,10,10,10,10,10])
                        // ->dataset('Bonus2', [20,20,20,210,102,120,120,20,20,20,20,20])
                        // ->dataset('Bonus3', [20,40,20,210,132,320,120,203,23,30,30,30])
                        // ->dataset('Bonus5', [60,260,206,260,132,330,120,223,23,310,320,340])
                        // ->dataset('Bonus4', [120,40,20,220,140,310,110,233,33,30,30,30])                                                                    
                        ->elementLabel('Dalam Rupiah');
//================================================END OF WORKING WITH PARAM====================================================================

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
         return view('home',compact(['chart', 'chart2', 'yearNow']));
    }

    public function getChartWithForEach(){
        $hasils = array();
        $datas = Penjualan_produk::all();
        foreach ($datas as $data) {
            $hasils[] = $data->total_hargajual;            
        } 
        dd($hasils);

        return view('home');
    }
    
}
