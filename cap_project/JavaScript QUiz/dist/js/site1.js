let questions = [
  {
    id: 1,
    question:
      "Which badminton player has failed to qualify for the Tokyo Olympics?",
    answer: "Saina Nehwal ",
    options: ["Sai Praneeth", "PV Sindhu", "Saina Nehwal", "Chirag Shetty"],
  },
  {
    id: 2,
    question: " Which sports will make its debut at Tokyo Olympics 2020?",
    answer: " Karate",
    options: ["Fencing", "Karate", "Judo", "Equestrian"],
  },
  {
    id: 3,
    question: " When is the opening ceremony of the Tokyo Olympic Games 2021?",
    answer: "July 23rd",
    options: ["July 23rd", "July 22nd", "July 24th", "July 25th"],
  },
  {
    id: 4,
    question:
      " Who is the first and only Indian female wrestler to win a medal at the Olympics?",
    answer: " July 23rd",
    options: ["Vinesh Phogat", "Sakshi Malik", "Sonam Malik", "Anshu Malik"],
  },
  {
    id: 5,
    question:
      "What is the size of the Indian contingent at the Tokyo Olympics 2020?",
    answer: "228",
    options: ["196", "336", "248", "228"],
  },
  {
    id: 6,
    question: "Who will be representing India in the Women’s Artistic event?",
    answer: "Pranati Nayak",
    options: ["Annu Rani", "Maana Patel", "Priyanka Goswami", "Pranati Nayak"],
  },

  {
    id: 7,
    question:
      " How many Indian track and field athletes have qualified for the Olympics Tokyo 2020?",
    answer: "26",
    options: ["30", "26", "40", "15"],
  },
  {
    id: 8,
    question:
      " Which Indian track and field athlete missed out in the Tokyo Olympics 2020?",
    answer: " Hima Das",
    options: ["Dutee Chand", "Seema Punia", "Hima Das", "Kamalpreet Kaur"],
  },
  {
    id: 9,
    question:
      "Which tennis players will not be playing at the Tokyo Olympics 2020?",
    answer: "Rohan Bopanna",
    options: ["Sania Mirza", "Rohan Bopanna", "Ankita Raina", "Sumit Nagpal"],
  },
  {
    id: 10,
    question:
      "Which sports will be returning to the Olympics this year after being cut out previously?",
    answer: "Baseball",
    options: ["Fencing", "Golf", "Judo", "Baseball"],
  },
  {
    id: 11,
    question:
      "Which medal has India won at the Tokyo Olympics 2020 in Mens Hockey?",
    answer: "Bronze",
    options: ["Silver", "Gold", "Bronze", "No medal"],
  },
  {
    id: 12,
    question:
      "Which team has India defeated to reach the Semi Finals of Olympics Hockey 2020?",
    answer: "Britain",
    options: ["Japan", "Britain", "China ", "Pakistan"],
  },
  {
    id: 13,
    question:
      "Which country has won the highest number of Olympic medals till date?",
    answer: "USA",
    options: ["China", "Japan", "USA", "Britain"],
  },
  {
    id: 14,
    question: " Which year did the torch burning relay start in the Olympics?",
    answer: "1936",
    options: ["1932", "1936", "1940", "1962"],
  },
  {
    id: 15,
    question:
      "Which of the following athletes wore a parachute while flying to 1960 Olympics?",
    answer: "Muhammed Ali",
    options: ["Muhammed Ali", "Dhyan Chand", "Mike Tyson", "None of these"],
  },
];

let question_count = 0;
let points = 0;

window.onload = function () {
  show(question_count);
};

function next() {
  // if the question is last then redirect to final page
  if (question_count == questions.length - 1) {
    sessionStorage.setItem("time", time);
    clearInterval(mytime);
    location.href = "end.html";
  }
  console.log(question_count);

  let user_answer = document.querySelector("li.option.active").innerHTML;
  // check if the answer is right or wrong
  if (user_answer == questions[question_count].answer) {
    points += 10;
    sessionStorage.setItem("points", points);
  }
  console.log(points);

  question_count++;
  show(question_count);
}

function show(count) {
  let question = document.getElementById("questions");
  let [first, second, third, fourth] = questions[count].options;

  question.innerHTML = `
  <h2>Q${count + 1}. ${questions[count].question}</h2>
   <ul class="option_group">
  <li class="option">${first}</li>
  <li class="option">${second}</li>
  <li class="option">${third}</li>
  <li class="option">${fourth}</li>
</ul> 
  `;
  toggleActive();
}

function toggleActive() {
  let option = document.querySelectorAll("li.option");
  for (let i = 0; i < option.length; i++) {
    option[i].onclick = function () {
      for (let i = 0; i < option.length; i++) {
        if (option[i].classList.contains("active")) {
          option[i].classList.remove("active");
        }
      }
      option[i].classList.add("active");
    };
  }
}
