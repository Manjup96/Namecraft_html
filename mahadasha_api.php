<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
var api = 'major_vdasha';
var userId = '624804';
var apiKey = '41073cb4d18137939829682596d81f16';
var data = {
  day: 3,
  month: 11,
  year: 1991,
  hour: 22,
  min: 0,
  lat: 18.386620, 
  lon: 78.802246,
  tzone: 5.5,
};

var auth = "Basic " + btoa(userId + ":" + apiKey);

var request = $.ajax({
  url: "https://json.astrologyapi.com/v1/major_vdasha",
  
  method: "POST",
  dataType: 'json',
  headers: {
    "Authorization": auth,
    "Content-Type": 'application/json'
  },
  data: JSON.stringify(data)
});

request.then(function(resp) {
  console.log(resp);
  alert("success");
}, function(xhr, status, error) {
  console.log(xhr.responseJSON || xhr.responseText);
  alert("Error: " + error);
});