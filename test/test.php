<p>Enter First Number : <input type="text" id="Text1" name="TextBox1" onkeypress="return add_number(event)"></p>

<p>Enter Second Number : <input type="text" id="Text2" name="TextBox2" onkeypress="return add_number(event)"></p>

<br>Result : <input type="text" id="txtresult" name="TextBox3">

<script>
    function add_number(e) {
  if (isNumberKey(e)) {
    setTimeout(() => {
      var first_number = document.getElementById("Text1").value !== "" ? parseInt(document.getElementById("Text1").value) : 0;
      var second_number = document.getElementById("Text2").value !== "" ? parseInt(document.getElementById("Text2").value) : 0;
      var result = first_number * second_number;
      document.getElementById("txtresult").value = result;
    }, 1)
    return true;
  } else {
    return false;
  }
}

function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}
</script>