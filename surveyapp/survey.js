//ar pollCount = 1;

  //  function createNewPoll() {
     // var newPoll = document.createElement("div");
     // newPoll.classList.add("poll" + pollCount);

      //var question = prompt("Enter the new poll question:");
      //newPoll.innerHTML = `<p>${question}</p>`;

      //for (let i = 1; i <= 4; i++) {
       // var option = prompt(`Enter option ${i} for ${question}:`);
        //newPoll.innerHTML += `
        //  <input type="radio" id="#${pollCount}-${i}" name="poll${pollCount}" value="${option}">
         // <label for="#${pollCount}-${i}">${option}</label><br>
        //`;
    //  }
     // var submitButton = document.querySelector('.sub');
      //submitButton.parentNode.insertBefore(newPoll, submitButton);

      //pollCount++;
  //  }
  var pollCount = 1;

function createNewPoll() {
  var newPoll = document.createElement("div");
  newPoll.classList.add("poll" + pollCount);

  var question = prompt("Enter the new poll question:");

 
  if (question !== null) {
    newPoll.innerHTML = `<p>${question}</p>`;

    for (let i = 1; i <= 4; i++) {
      var option = prompt(`Enter option ${i} for ${question}:`);
      
      
      if (option === null) {
        return;
      }

      newPoll.innerHTML += `
        <input type="radio" id="#${pollCount}-${i}" name="poll${pollCount}" value="${option}">
        <label for="#${pollCount}-${i}">${option}</label><br>
      `;
    }

    var submitButton = document.querySelector('.sub');
    submitButton.parentNode.insertBefore(newPoll, submitButton);

    pollCount++;
  }
}




