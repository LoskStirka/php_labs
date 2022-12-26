<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="imgs\favicon.png" type="image/png">
    <title>Калькулятор Онлайн</title>
</head>
<style>
    body {
        margin: 15;
        background: gray;
        color: black;
    }

    .center {
        position: center;
        width: 100%;
        text-align: center;
        margin-top: 25%;
    }
</style>
<div class="center">
    <form action="" method="POST" class="form-example">
        <div class="form-group">
            <label for="name"> </label>
            <input type="text" name="a" id="name" class="from-control">
        </div>
        <div>
            <input type="submit" value="Результат" class="btn btn-primary">
        </div>
        <div>
            <?php if (!empty($_POST['a'])) : ?>
                <div>
                    <?php if (strlen($_POST['a']) > 3) : ?>
                        <div>Результат:
                            <?php $rez = $_POST['a'][0];
                            for ($i = 1; $i <= strlen($_POST['a']) - 1; $i++) {
                                if ($_POST['a'][$i] === "+" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $rez = $rez + $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "/" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    if ((int)$_POST['a'][$i + 2] !== 0) {
                                        $rez = $rez / $_POST['a'][$i + 2];
                                    } else {
                                        echo ("На ноль делить нельзя!");
                                        break;
                                    }
                                }
                                if ($_POST['a'][$i] === "*" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $rez = $rez * $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "-" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $rez = $rez - $_POST['a'][$i + 2];
                                }
                                if ($_POST['a'][$i] === "^" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                    $rez = $rez ** $_POST['a'][$i + 2];
                                }
                            }
                            $equally = strpos($_POST['a'], '=') + 2;
                            if ($equally > 0) {
                                if ((int)substr($_POST['a'], $equally)  === $rez) {
                                    echo ("Данное равенство является верным!");
                                } else {
                                    echo ("Данное равенство является неверным!");
                                }
                            }

                            ?>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>
        </div>
</div>
</form>
</div>

</html>