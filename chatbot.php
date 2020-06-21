<?php
session_start();
require_once "connect.php";
if(!isset($_SESSION['userid']))
{
  header('Location:login.php');
  return;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Multi Step Bootstrap Form with animations</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&family=Roboto+Mono:wght@700&family=Roboto+Slab&family=Source+Code+Pro:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="content">
  <nav class="navbar container-fluid">
    <ul class="navbar-nav" id="navbar-id">
      <li><i class="fa fa-user-circle-o icon"></i><a href="#" id="username" style="font-family: 'Roboto Mono', monospace;">Hi! <?php echo $_SESSION["userid"]; ?></a></li>
    </ul>
  </nav>
</div>

    <!-- partial:index.partial.html -->

    <!--PEN HEADER-->
    <header class="header">
      <h1><u>Interview Questionaire</u></h1>
      <!--  <div class="header__btns btns"><a class="header__btn btn" href="https://github.com/nat-davydova/multisteps-form" title="Check on Github" target="_blank">Check on Github</a></div> -->
    </header>
    <!--PEN CONTENT     -->
    <form action="results.php" method="post">
    <div class="content">
      <!--content inner-->
      <div class="content__inner">
        <div class="container">
          
          <h3 class="content__title" style="color: #66fcf1;font-family: 'Bebas Neue', cursive;font-size: 30px;">
            Click on steps/progress bar to navigate through the questions.
          </h3><br>
        </div>
        <div class="container overflow-hidden">
          <!--multisteps-form-->
          <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
              <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                  <button
                    class="multisteps-form__progress-btn js-active"
                    type="button"
                    title="Q1"
                  >
                    Q1
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q2"
                  >
                    Q2
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q3"
                  >
                    Q3
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q4"
                  >
                    Q4
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q5"
                  >
                    Q5
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q6"
                  >
                    Q6
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q7"
                  >
                    Q7
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q8"
                  >
                    Q8
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q9"
                  >
                    Q9
                  </button>
                  <button
                    class="multisteps-form__progress-btn"
                    type="button"
                    title="Q10"
                  >
                    Q10
                  </button>
                </div>
              </div>
            </div>
            <!--form panels--><br><br>
            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form">
                  <!--single form panel-->
                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Question 1</h3>
                    <div class="multisteps-form__content">
                      <p>
                        “Working in a holiday resort is a popular option for
                        graduates wishing to see the world. It gives them the
                        opportunity to experience foreign cultures, make friends
                        and build lifelong memories. As the skills required for
                        securing a job tend to be low, most graduates choose not
                        to turn their experience into a career, but enjoy the
                        time they spend abroad. But there is a dark side to this
                        kind of casual work: often workers’ rights are ignored
                        and they may find themselves working long hours for very
                        little money, as holiday resorts often do not adhere to
                        the standards we might expect in the UK”
                      </p>
                      <p>
                        Statement 1: Many graduates enjoy working in holiday
                        resorts so much they choose to develop a career in
                        hospitality.
                      </p>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-1-answers"
                          id="question-1-answers-A"
                          value="A"
                        />
                        <label for="question-1-answers-A"> True </label>
                      </div>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-1-answers"
                          id="question-1-answers-B"
                          value="B"
                        />
                        <label for="question-1-answers-B"> False </label>
                      </div>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-1-answers"
                          id="question-1-answers-C"
                          value="C"
                        />
                        <label for="question-1-answers-C"> Cannot Say </label>
                      </div>
                  
                    </div>
                  </div>
                  <!--single form panel-->
                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Question 2</h3>
                    <div class="multisteps-form__content">
                      <p>
                        “Working in a holiday resort is a popular option for
                        graduates wishing to see the world. It gives them the
                        opportunity to experience foreign cultures, make friends
                        and build lifelong memories. As the skills required for
                        securing a job tend to be low, most graduates choose not
                        to turn their experience into a career, but enjoy the
                        time they spend abroad. But there is a dark side to this
                        kind of casual work: often workers’ rights are ignored
                        and they may find themselves working long hours for very
                        little money, as holiday resorts often do not adhere to
                        the standards we might expect in the UK”
                      </p>
                      <p>
                        Statement 2: Statement 2: All graduates who spend time working in holiday 
                        resorts make friends.
                      </p>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-2-answers"
                          id="question-2-answers-A"
                          value="A"
                        />
                        <label for="question-2-answers-A"> True </label>
                      </div>

                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-2-answers"
                          id="question-2-answers-B"
                          value="B"
                        />
                        <label for="question-2-answers-B"> False </label>
                      </div>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-2-answers"
                          id="question-2-answers-C"
                          value="C"
                        />
                        <label for="question-2-answers-C"> Cannot Say </label>
                      </div>
                      
                    </div>
                  </div>
                  <div
                    class="multisteps-form__panel shadow p-4 rounded bg-white"
                    data-animation="scaleIn"
                  >
                    <h3 class="multisteps-form__title">Question 3</h3>
                    <div class="multisteps-form__content">
                      <p>
                        “Working in a holiday resort is a popular option for
                        graduates wishing to see the world. It gives them the
                        opportunity to experience foreign cultures, make friends
                        and build lifelong memories. As the skills required for
                        securing a job tend to be low, most graduates choose not
                        to turn their experience into a career, but enjoy the
                        time they spend abroad. But there is a dark side to this
                        kind of casual work: often workers’ rights are ignored
                        and they may find themselves working long hours for very
                        little money, as holiday resorts often do not adhere to
                        the standards we might expect in the UK”
                      </p>
                      <p>
                        Statement 3: Graduates working in holiday resorts often find 
                        that the pay and working conditions are lower than 
                        they might expect in the UK.
                      </p>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-3-answers"
                          id="question-3-answers-A"
                          value="A"
                        />
                        <label for="question-3-answers-A"> True </label>
                      </div>

                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-3-answers"
                          id="question-3-answers-B"
                          value="B"
                        />
                        <label for="question-3-answers-B"> False </label>
                      </div>
                      <div class="form-row mt-4">
                        <input
                          type="radio"
                          name="question-3-answers"
                          id="question-3-answers-C"
                          value="C"
                        />
                        <label for="question-3-answers-C"> Cannot Say </label>
                      </div>
                      
                    </div>
                  </div>
                  <div
                  class="multisteps-form__panel shadow p-4 rounded bg-white"
                  data-animation="scaleIn"
                >
                  <h3 class="multisteps-form__title">Question 4</h3>
                  <div class="multisteps-form__content">
                    <p>
                      You have invited a number of colleagues to a meeting. Please rank their responses from the most to least positive:
                    </p>
                    <ol style="margin-left: 10px;">
                      <li><p>Ok, sounds good, please can you send me the agenda?</p></li>
                      <li><p>I'm sorry, I can’t make it but thanks for inviting me.</p></li>
                      <li><p> No. That’s not convenient for me and I don’t think I need to be there anyway.</p></li>
                      <li><p>Great – I’ll look forward to seeing you there</p></li>
                      <li><p>Is it important that I’m there? Is there any chance I could grab the minutes from someone instead?</p></li>
                    </ol>
                    
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-4-answers"
                        id="question-4-answers-A"
                        value="A"
                      />
                      <label for="question-4-answers-A">4,1,2,5,3 </label>
                    </div>

                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-4-answers"
                        id="question-4-answers-B"
                        value="B"
                      />
                      <label for="question-4-answers-B"> 2,4,5,3,1 </label>
                    </div>
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-4-answers"
                        id="question-4-answers-C"
                        value="C"
                      />
                      <label for="question-4-answers-C"> 1,3,5,4,2 </label>
                    </div>
                    
                  </div>
                </div>
                <div
                class="multisteps-form__panel shadow p-4 rounded bg-white"
                data-animation="scaleIn"
              >
                <h3 class="multisteps-form__title">Question 5</h3>
                <div class="multisteps-form__content">
                  <p>
                    What is the missing letter in the following series? ‘a – c – e – ? – i’
                  </p>
                  
                  <div class="form-row mt-4">
                    <input
                      type="radio"
                      name="question-5-answers"
                      id="question-5-answers-A"
                      value="A"
                    />
                    <label for="question-5-answers-A"> b </label>
                  </div>

                  <div class="form-row mt-4">
                    <input
                      type="radio"
                      name="question-5-answers"
                      id="question-5-answers-B"
                      value="B"
                    />
                    <label for="question-5-answers-B"> d </label>
                  </div>
                  <div class="form-row mt-4">
                    <input
                      type="radio"
                      name="question-5-answers"
                      id="question-5-answers-C"
                      value="C"
                    />
                    <label for="question-5-answers-C"> e </label>
                  </div>
                  <div class="form-row mt-4">
                    <input
                      type="radio"
                      name="question-5-answers"
                      id="question-5-answers-D"
                      value="D"
                    />
                    <label for="question-5-answers-D"> g </label>
                  </div>
                  <div class="form-row mt-4">
                    <input
                      type="radio"
                      name="question-5-answers"
                      id="question-5-answers-E"
                      value="E"
                    />
                    <label for="question-5-answers-E"> f </label>
                  </div>
                  
                </div>
              </div>
              <div
                  class="multisteps-form__panel shadow p-4 rounded bg-white"
                  data-animation="scaleIn"
                >
                  <h3 class="multisteps-form__title">Question 6</h3>
                  <div class="multisteps-form__content">
                    <p>
                      A magician bought a rabbit for £60 and a 
                      pigeon for £70. How much more expensive is 
                      the pigeon than the rabbit in percentage?
                    </p>
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-6-answers"
                        id="question-6-answers-A"
                        value="A"
                      />
                      <label for="question-6-answers-A">a) 10% </label>
                    </div>

                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-6-answers"
                        id="question-6-answers-B"
                        value="B"
                      />
                      <label for="question-6-answers-B">b) 5% </label>
                    </div>
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-6-answers"
                        id="question-6-answers-C"
                        value="C"
                      />
                      <label for="question-6-answers-C">c) 16.66% </label>
                    </div>
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-6-answers"
                        id="question-6-answers-D"
                        value="D"
                      />
                      <label for="question-6-answers-D">d) 17.8% </label>
                    </div>
                    
                  </div>
                </div>
                <div
                  class="multisteps-form__panel shadow p-4 rounded bg-white"
                  data-animation="scaleIn"
                >
                  <h3 class="multisteps-form__title">Question 7</h3>
                  <div class="multisteps-form__content">
                    <p>
                      Select true or false
                    </p>
                    <p>
                      I prefer to work alone than in a group.
                    </p>
                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-7-answers"
                        id="question-7-answers-A"
                        value="A"
                      />
                      <label for="question-7-answers-A"> True </label>
                    </div>

                    <div class="form-row mt-4">
                      <input
                        type="radio"
                        name="question-7-answers"
                        id="question-7-answers-B"
                        value="B"
                      />
                      <label for="question-7-answers-B"> False </label>
                    </div>
                    
                  </div>
                </div>
              <div
              class="multisteps-form__panel shadow p-4 rounded bg-white"
              data-animation="scaleIn"
            >
              <h3 class="multisteps-form__title">Question 8</h3>
              <div class="multisteps-form__content">
                <p>
                  Select true or false
                </p>
                <p>
                  I like managing other people.
                </p>
                <div class="form-row mt-4">
                  <input
                    type="radio"
                    name="question-8-answers"
                    id="question-8-answers-A"
                    value="A"
                  />
                  <label for="question-8-answers-A"> Strongly Disagree </label>
                </div>

                <div class="form-row mt-4">
                  <input
                    type="radio"
                    name="question-8-answers"
                    id="question-8-answers-B"
                    value="B"
                  />
                  <label for="question-8-answers-B"> Disagree </label>
                </div>
                <div class="form-row mt-4">
                  <input
                    type="radio"
                    name="question-8-answers"
                    id="question-8-answers-C"
                    value="C"
                  />
                  <label for="question-8-answers-C"> Neutral </label>
                </div>
                <div class="form-row mt-4">
                  <input
                    type="radio"
                    name="question-8-answers"
                    id="question-8-answers-D"
                    value="D"
                  />
                  <label for="question-8-answers-D"> Agree </label>
                </div>
                <div class="form-row mt-4">
                  <input
                    type="radio"
                    name="question-8-answers"
                    id="question-8-answers-E"
                    value="E"
                  />
                  <label for="question-8-answers-E"> Strongly Agree </label>
                </div>
                
              </div>
            </div>
            <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title">Question 9</h3>
            <div class="multisteps-form__content">
              <p>
                Which of the following tasks you would most 
                like to do?
              </p>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-9-answers"
                  id="question-9-answers-A"
                  value="A"
                />
                <label for="question-9-answers-A"> Design the look of a product </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-9-answers"
                  id="question-9-answers-B"
                  value="B"
                />
                <label for="question-9-answers-B"> Manage someone’s (or a company’s) finances </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-9-answers"
                  id="question-9-answers-C"
                  value="C"
                />
                <label for="question-9-answers-C"> Manage someone’s (or a company’s) finances </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-9-answers"
                  id="question-9-answers-D"
                  value="D"
                />
                <label for="question-9-answers-D"> Organise paperwork and make sure everything works in order </label>
              </div>
            </div>
          </div>
          <div
            class="multisteps-form__panel shadow p-4 rounded bg-white"
            data-animation="scaleIn"
          >
            <h3 class="multisteps-form__title">Question 10</h3>
            <div class="multisteps-form__content">
              <p>
                Which of the following tasks you would least 
                like to do?
              </p>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-10-answers"
                  id="question-10-answers-A"
                  value="A"
                />
                <label for="question-10-answers-A"> Design the look of a product </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-10-answers"
                  id="question-10-answers-B"
                  value="B"
                />
                <label for="question-10-answers-B"> Manage someone’s (or a company’s) finances </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-10-answers"
                  id="question-10-answers-C"
                  value="C"
                />
                <label for="question-10-answers-C"> Manage someone’s (or a company’s) finances </label>
              </div>
              <div class="form-row mt-4">
                <input
                  type="radio"
                  name="question-10-answers"
                  id="question-10-answers-D"
                  value="D"
                />
                <label for="question-10-answers-D"> Organise paperwork and make sure everything works in order </label>
              </div>

              
              <div class="button-row d-flex mt-4">
                
                
              <button
                          class="btn btn-success ml-auto"
                          type="submit"
                          title="Send"
                        >
                          Send
                        </button>
            </div>
          </div>
        </div>
                        
</form>                
             
        </div>
      </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script>
    <script src="./script.js"></script>
  </body>
</html>
