var $ = require('jquery');
var Bacon = require('baconjs');

$.fn.asEventStream = Bacon.$.asEventStream;

function textFieldValue(textField) {
    function value() {return textField.val();}
    return textField.asEventStream('keyup').map(value).toProperty(value());
}

username = textFieldValue($('#username'));
fullname = textFieldValue($('#fullname'));

username.log();

function nonEmpty(x) { return x.length > 0; }
function and(a, b) { return a && b; }
var usernameEntered = username.map(nonEmpty);
var fullnameEntered = fullname.map(nonEmpty);
var buttonEnabled = usernameEntered.combine(fullnameEntered, and);
buttonEnabled.onValue(function(enabled) {
    console.log('ok');
    $('#register button').attr('disabled', 'disabled');
});