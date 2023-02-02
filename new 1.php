<php

<form method="post">
<label for="soal">Soal (masukkan nilai tiap-tiap pertanyaan dalam soal yang dipisah dengan koma, maksimal 10 pertanyaan):</label><br/>
<input name="soal" id="soal" size="100" value="10,10,10,15,15" type="text"><br/><br/>
<label for="t">T:</label>
<input name="t" id="t" size="3" value="20" type="text">	

<input value="Hitung" name="hitung" type="submit">
</form>

<pre>SOAL

Array
(
    [Pertanyaan 1] => 10
    [Pertanyaan 2] => 10
    [Pertanyaan 3] => 10
    [Pertanyaan 4] => 15
    [Pertanyaan 5] => 15
)
dengan Nilai Total Soal (T) = 20 ?

JAWABAN

Jumlah semua Kombinasi (K) = 3

Daftar Kombinasi:
Array
(
    [0] => Array
        (
            [Pertanyaan 2] => 10
            [Pertanyaan 1] => 10
        )

    [1] => Array
        (
            [Pertanyaan 3] => 10
            [Pertanyaan 1] => 10
        )

    [2] => Array
        (
            [Pertanyaan 3] => 10
            [Pertanyaan 2] => 10
        )

)
</pre>
</php