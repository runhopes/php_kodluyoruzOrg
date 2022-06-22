<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Ödevi</title>
    <style>
        * {
            font-family: system-ui, sans-serif
        }

        body {
            margin: 2rem;
        }

        input {
            background: initial;
            border: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 0.875rem;
            padding: 0.5rem 0.75rem;
            outline: 0;
            margin-left: 1rem;
            border-radius: 0.5rem;
        }

        button {
            border: 0;
            outline: 0;
            cursor: pointer;
            background-color: #1a73e8;
            color: #fff;
            padding: 0.5rem 0.75rem;
            border-radius: 0.5rem;
            margin-left: 0.5rem;
        }
    </style>
</head>

<body>
    <form action="" method="post" style="width: 50%;margin-left: 40%;">
        <label for="sayi">Sayı girin</label>
        <input type="text" name="sayi" <?php if(isset($_POST["sayi"])){echo 'value="'. $_POST["sayi"].'"';} ?> placeholder="Sayı girin...">
        <button type="submit">Gönder</button><br>
        <?php
            
            if (isset($_POST["sayi"])) {

                $sayi = $_POST["sayi"];
                
                if(empty($sayi)) echo "<br><b>Lütfen boş bırakmayınız</b>";
                else if ($sayi%3==0) echo "<br><b>Evet,".$sayi." 3'e bolunebilmektedir.</b>";
                else echo "<br><b>Hayir,sayi 3e bolunmemektedir.</b>";
                 

            }
        ?>
    </form>
</body>

</html>

