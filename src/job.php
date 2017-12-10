<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Praca</title>
    <meta name="description" content="Strona dla osób zainteresowanych pracą w firmie">
    <meta name="keywords" content="praca, gospodarstwo, hodowla, weterynaria, opieka">
    <?php
        if(isset($_COOKIE['css'])){
            echo '<link rel="stylesheet" type="text/css" href="../styles/'.$_COOKIE['css'].'">';
            } else {echo '<link rel="stylesheet" type="text/css" href="../styles/style.css">';}
            ?>
</head>
<style type="text/css">
    label {
        display: block;
        float: center;
        width: 100px;
        text-align: center;
    }

    div {
        margin-bottom: 2em;
        text-align: center;
    }

    .error {color: #FF0000;}

</style>
<body>

<?php
$fnameErr = $snameErr = $emailErr = $monthErr = $phoneErr = $jobErr = $skillsErr = "";
$fname = $sname = $email = $month = $phone = $job = $skills = "";
$somethingWentWrong = False;

function somethingWentWrong(){
$GLOBALS['somethingWentWrong'] = True;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Imię jest wymagane";
    somethingWentWrong();
  } else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[\s\p{L}]*$/",$fname)) {
    somethingWentWrong();
      $fnameErr = "Znaleźliśmy niedopuszcalne znaki w imieniu";
    }
  }

  if (empty($_POST["sname"])) {
      $snameErr = "Nazwisko jest wymagane";
      somethingWentWrong();
    } else {
      $sname = test_input($_POST["sname"]);
      if (!preg_match("/^[\s\p{L}]*$/",$sname)) {
      somethingWentWrong();
        $snameErr = "Znaleźliśmy niedopuszcalne znaki w nazwisku";
      }
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email jest wymagany";
    somethingWentWrong();
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    somethingWentWrong();
      $emailErr = "Niepoprawny email";
    }
  }

  if (empty($_POST["month"])) {
    somethingWentWrong();
    $month = "Wybierz miesiąc";
  } else {
    $month = test_input($_POST["month"]);
    if (!isValidMonth($month)) {
    somethingWentWrong();
      $monthErr = "Wybierz miesiąc z listy";
    }
  }

  if (empty($_POST["phone"])) {
  somethingWentWrong();
    $phone = "Wprowadź 9 cyfr";
  } else {
    $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{9}$/",$phone)) {
        somethingWentWrong();
          $phoneErr = "Poprawny numer to kolejno 9 cyfr";
        }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function isValidMonth($month){
    $months = array("styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień");
    $isValid = false;
    foreach ($months as $m){
        if($month == $m){$isValid = true;}
    }
    return $isValid;
}
?>

<!--navbar-->
<?php include ("common/header.php");?>

<h2 style="text-align: center">Strona dla przyszłych pracowników naszej firmy</h2>
<p style="text-align: center;margin-bottom: 2em">Jeśli poszukujesz pracy przy hodowli, lubisz zwierzęta i masz z nimi
    dobry kontakt to
    zgłoś się do nas !</p>

<!--offer form-->
<div class = "rounded-shaded-border grad-bottom-right">
<p class=center><span class="error">* pole wymagane.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">
<!--htmlspecalchars zapobiega wstrzykiwaniu skryptu, zamienia znaki htmlowe na $gt;-->
    <div style="width: 400px;margin: 0 auto;" id=grad-bottom-right>
        <div>
            <label class=center>Imię:</label>
            <input type="text" name="fname" id="firstName" size="40" autofocus  value="<?php echo $fname;?>">
            <span class="error">*</span>
            <p class="error"><?php echo $fnameErr;?></p>
        </div>
        <div>
            <label>Nazwisko:</label>
            <input type="text" name="sname" id="lastName" size="40" value="<?php echo $sname;?>">
            <span class="error">*</span>
            <p class="error"><?php echo $snameErr;?></p>
        </div>
        <div>
            <label>E-mail:</label>
            <input type="text" name="email" size="40" value="<?php echo $email;?>">
            <span class="error">*</span>
            <p class="error"><?php echo $emailErr;?></p>
        </div>
        <div>
            <label>Miesiąc urodzenia:</label>
            <input list="months" name="month" size="40" value="<?php echo $month;?>">
            <span class="error">*</span>
            <p class="error"><?php echo $monthErr;?></p>
            <datalist id="months">
                <option value="styczeń">
                <option value="luty">
                <option value="marzec">
                <option value="kwiecień">
                <option value="maj">
                <option value="czerwiec">
                <option value="lipiec">
                <option value="sierpień">
                <option value="wrzesień">
                <option value="październik">
                <option value="listopad">
                <option value="grudzień">
            </datalist>
        </div>
        <div>
            <label>Telefon(9 cyfr):</label>
            <input type="tel" name="phone" size="40" value="<?php echo $phone;?>">
            <span class="error">*</span>
            <p class="error"><?php echo $phoneErr;?></p>
        </div>
        <div>
            <label>Stanowisko</label><br>
            <input type="radio" name="job" value="sprztacz" checked>Sprzatacz<br>
            <input type="radio" name="job" value="hodowca">Hodowca<br>
            <input type="radio" name="job" value="weterynarz">Weterynarz<br>
        </div>
        <div>
            <label>Umiejetności</label><br><br>
            <input type="checkbox" name="skills1" value="drivingLicense">Prawo jazdy<br>
            <input type="checkbox" name="skills2" value="experience">Inne doswiadczenie zawodowe<br>
            <input type="checkbox" name="skills3" value="foreignLanguage">Znajomość języków obcych<br>
        </div>
        <input type="submit" style="margin-top: 20px">
    </div>
</form>
</div>

<?php
if($somethingWentWrong!=true && !empty($_POST["fname"])){
echo "<h2>".$_POST["fname"].", przyjęliśmy twoje zgłoszenie na stanowisko ".$_POST["job"].". Wkrótce się skontaktujemy.</h2>";
}
?>

<?php include ("common/footer.php");?>
</body>
</html>