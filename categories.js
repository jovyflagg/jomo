  function recreational(){
    fetch("http://www.boredapi.com/api/activity?type=recreational")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function educational(){
    fetch("http://www.boredapi.com/api/activity?type=education")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function diy(){
    fetch("http://www.boredapi.com/api/activity?type=diy")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function social(){
    fetch("http://www.boredapi.com/api/activity?type=social")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function charity(){
    fetch("http://www.boredapi.com/api/activity?type=charity")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function cooking(){
    fetch("http://www.boredapi.com/api/activity?type=cooking")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function relaxation(){
    fetch("http://www.boredapi.com/api/activity?type=relaxation")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function busywork(){
    fetch("http://www.boredapi.com/api/activity?type=busywork")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }

      function music(){
    fetch("http://www.boredapi.com/api/activity?type=music")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        console.log(data.activity);
        console.log(data.type);
        document.getElementById("activity").innerHTML = data.activity;
        document.getElementById("category").innerHTML = data.type;
      })
      .catch(console.error);
      }