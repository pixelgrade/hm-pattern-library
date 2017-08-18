<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="section">
    Idle & Empty
    <div class="field">
        <label for="">Text</label>
        <input type="text">
    </div>
    Placeholder
    <div class="field">
        <label for="">Text</label>
        <input type="text" placeholder="Placeholder">
    </div>
    Textarea
    <div class="field">
        <label for="">Text</label>
        <textarea placeholder="Placeholder"></textarea>
    </div>
    Error
    <div class="field field-has-error">
        <label for="">Text</label>
        <input type="text" required>
        <div class="error">Please insert a proper email address</div>
    </div>
    Select
    <div class="field">
        <select name="" id="">
            <option value="0">Select One...</option>
        </select>
    </div>
    Radio
    <div class="radio">
        <input type="radio" id="radio1" name="radio" checked>
        <label for="radio1">Option 1</label>
    </div>
    <div class="radio">
        <input type="radio" id="radio2" name="radio">
        <label for="radio2">Option 2</label>
    </div>
    <div class="radio disabled">
        <input type="radio" id="radio3" name="radio" disabled>
        <label for="radio3">Option 3</label>
    </div>

    Checkboxes
    <div class="checkbox">
        <input type="checkbox" id="checkbox1" checked>
        <label for="checkbox1">Option 1</label>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="checkbox2">
        <label for="checkbox2">Option 2</label>
    </div>
    <div class="checkbox disabled">
        <input type="checkbox" id="checkbox3" disabled>
        <label for="checkbox3">Option 3</label>
    </div>
</div>


<div class="section section-inline">
    <div class="swatch background-blue"></div>
    <div class="swatch background-pink"></div>
    <div class="swatch background-orange"></div>
    <div class="swatch background-purple"></div>
</div>

<div class="section section-inline">
    <div class="swatch background-blue-dark"></div>
    <div class="swatch background-pink-dark"></div>
    <div class="swatch background-orange-dark"></div>
    <div class="swatch background-purple-dark"></div>
</div>

<div class="section section-inline">
    <div class="swatch background-blue-light"></div>
    <div class="swatch background-pink-light"></div>
    <div class="swatch background-orange-light"></div>
    <div class="swatch background-purple-light"></div>
</div>

<div class="section section-inline">
    <div class="swatch background-black"></div>
    <div class="swatch background-gray-dark"></div>
    <div class="swatch background-gray"></div>
    <div class="swatch background-gray-light"></div>
</div>

<div class="section section-inline">
    <div class="c-btn  c-btn--text">Text button</div>
    <input class="c-btn  c-btn--text" type="button" value="Text button">
    <button class="c-btn  c-btn--text"  disabled>Text button</button>
</div>

<div class="section section-inline">
    <div class="c-btn  c-btn--primary">Primary</div>
    <input class="c-btn  c-btn--primary" type="button" value="Primary">
    <button class="c-btn  c-btn--primary"  disabled>Primary</button>
</div>

<div class="section section-inline">
    <div class="c-btn  c-btn--secondary">Secondary</div>
    <input class="c-btn  c-btn--secondary" type="button" value="Secondary">
    <button class="c-btn  c-btn--secondary"  disabled>Secondary</button>
</div>

<div class="section section-inline">
    <div class="c-btn  c-btn--primary  c-btn--small">Small</div>
    <input class="c-btn  c-btn--primary" type="button" value="Secondary">
    <button class="c-btn  c-btn--primary  c-btn--large">Large Button</button>
</div>

<div class="section"></div>

<div class="section  background-blue">
    <div class="section-inline">
        <div class="c-btn  c-btn--text  c-btn--invert">Text button</div>
        <div class="c-btn  c-btn--primary  c-btn--invert">Primary</div>
        <div class="c-btn  c-btn--secondary  c-btn--invert">Secondary</div>
        <div class="c-btn  c-btn--tertiary">Secondary</div>
    </div>
    <div class="section"></div>
</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>