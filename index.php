<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP language</title>
</head>
<body>
  <div class="page-content-php">
    <form action="answer.php" method="GET">
      <p>Length</p>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="length">
        <label class="mdl-textfield__label" for="length-input">Length here ...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
      type="submit"
      >
        Calculate
      </button>
    </form>
  </div>
</body>
</html>