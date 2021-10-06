<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sarcasm Text Generator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <div class="title"><img src="/img/generatedtext.png"></div>
            <div class="mainContainer">
                <div class="inputContainer">
                    <input class="inputText" type="text" id="inputText" placeholder="Enter the text you want to sarcastify">
                    <div class="buttonInlineContainer">
                        <div class="btnSubmit" onclick="sarcasm()">Convert Text</div>
                        <div class="btnClear" onclick="deleteText()">Clear Text</div>
                    </div>
                    
                    
                    <textarea class="outputText" id="outputText" rows="6" placeholder="Your text will appear here" READONLY></textarea>
                </div>      
            </div>
        </div>

        <script src="main.js"></script>
        <script src="jquery.min-1.11.0.js"></script>
    </body>
</html>
