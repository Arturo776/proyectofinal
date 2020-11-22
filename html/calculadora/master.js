var text_field = document.getElementById("operation");
var result = document.getElementById("result");
var operation = '';
var first_number;

function addNumber(number)
{
  text_field.value += number;
}

function addToken(token)
{
  if (!isFinite(token))
  {
    text_field.value += ' ' + token + ' ';
  }
  else if (isFinite(token))
  {
    text_field.value += token;
  }
}


function Erase()
{
  text_field.value = '';
}

function Calculate()
{
  operation = text_field.value;
  text_field.value = eval(operation);
}
