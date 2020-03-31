<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller {
   public function tasu() {
        $num = 0;
        return view('calc.index', ['num' => $num]);
     }
    
    
     public function index(Request $request) {
         // （説明）こちらの分岐は足し算だったらという意味です。
         if($request->calcFlg ==="1") {
            $num = $request->val1 + $request->val2;
             // (指摘内容)　上記の分岐条件よりif文の中には足し算の処理が必要です。
         
         
         // (指摘内容)　上記の分岐条件で「$request->calcFlg === '1'」としているということは、
         //             ここの分岐条件は引き算を行うための条件を記述する必要があります。
         //             ※「$num === '1'」は間違いです。
             //  (指摘内容) ここではviewを実装しない。引き算の処理を実装します。
         }  else if($request->calcFlg ==="2") {
            $num = $request->val1 - $request->val2;


             // ※間違っているのでコメントアウトしました。
             // return view('calc.index', ['num' => $num]);
          } else if($request->calcFlg ==="3") {
            $num = $request->val1 * $request->val2;  
          
              
          }else if ($request->calcFlg ==="4") {
            $num = $request->val1 / $request->val2;  
            
                
          }else if ($request->calcFlg ==="5") {
            $num = $request->val1 % $request->val2;      
            
                
          } 
          
            
         
         //  (指摘内容) 上記で足し算または引き算の結果をview関数に渡してreturnする処理を実装すること。
         return view('calc.index',['num'=> $num,'val1'=> $request->val1,'val2'=> $request->val2]);
     }
    
    //  public function hiku(Request $request) {
    //     $num = $request->val1 - $request->val2;
    //     if($num->calcFlg === '2') {
    //     }else if($num === '2') {
    //      return view('calc.index', ['num' => $num]);
    //   }
   

    
}




