<?php 

namespace Alasary97\Phptest;

class Soal
{
    /**
     * Tulis program untuk mencari penjumlahan dari setiap angka dari 1 ke $n
     * angka yang di berikan akan selalu angka positif lebih dari 0
     * contoh 
     * summation(2) -> 3
     * 1 + 2
     * summation(8) -> 36
     * 1 + 2 + 3 + 4 + 5 + 6 + 7 + 8
     */
    public function summation($n) 
    {
        //Your Code Here
    }
    
    /**
     * Hitung berapa tahun yang lalu seorang ayah 2 kali umur anaknya atau berapa tahun dia akan berumur 2 kali umur anaknya
     * Contoh umur ayahnya 36 umur anaknya 7 tahun maka 22 tahun yang lalu umur ayahnya setara dengan 2 kali umur anaknya
     * Contoh umur ayahnya 42 umur anaknya 21 tahun maka 0 tahun yang lalu umur ayahnya setara dengan 2 kali umur anaknya
     */
    public function twice_as_old($dad_years_old, $son_years_old)
    {
        //Your Code Here
    }
    /**
     * Tulis Program Untuk Menentukan $n adalah angka Genap atau Ganjil
     * return Odd untuk ganjil dan Even untuk genap
     */
    public function even_or_odd(int $n): string 
    {
        // Your code here
    }
    /**
     * tulis program untuk cek apakah string 'x' dan 'o' bernilai sama, method ini harus return boolean dan tidak case sensitive
     * string juga dapat berisi berbagai character
     * contoh
     * XO("ooxx") => true
     * XO("xooxx") => false
     * XO("ooxXm") => true
     * XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
     * XO("zzoo") => false
     */
    public function XO($s) {
        // Your code here
    }
    /**
     * tuliskan program untuk mengitung jumlah seluruh angka positiv dari array yang di input
     * contoh [1,-4,7,12] => 1 + 7 + 12 = 20
     * catatan jika tidak ada angka yang dijumlahkan maka default returnya 0
     */
    public function positive_sum($arr) {
        // Your code here
    }
}
