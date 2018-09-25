function populate() {
    if(quiz.isEnded()) {
       showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};


function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};

function showScores() {
      var scr = quiz.score;
      localStorage.setItem("scr",scr);
    //  window.onload = alert(localStorage.getItem("storageName"));
       //gameOverHTML = "<h2>Name: " + localStorage.getItem("storageName")+ "</h2><br>"; 
     //  gameOverHTML +=  "<h2>College: " + localStorage.getItem("storageclg")+ "</h2><br>"; 
    // gameOverHTML += "  <h2>Score: " + localStorage.getItem("scr") + "</h2><br>";
    //gameOverHTML += "<a href='chart/index.php'>NEXT</a>" ;
    var gameOverHTML = "<a href='chart/index.php'>NEXT</a>" ;
  //  gameOverHTML += " <div id='myChart'></div> ";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
}

// create questions
var questions = [
   
    new Question("Which figure completes the series? <br> <img src='img/abstract/FQ1_0-984-250.gif'>", ["<img src='img/abstract/FQ1_A-90-90.gif'>", "<img src='img/abstract/FQ1_B-90-90.gif'>","<img src='img/abstract/FQ1_C-90-90.gif'>", "<img src='img/abstract/FQ1_D-90-90.gif'>"], "<img src='img/abstract/FQ1_D-90-90.gif'>"),
    new Question("Which figure completes the series? <br> <img src='img/abstract/FQ6_0-984-250.gif'>", ["<img src='img/abstract/FQ6_A-90-90.gif'>", "<img src='img/abstract/FQ6_B-90-90.gif'>", "<img src='img/abstract/FQ6_E-90-90.gif'>", "<img src='img/abstract/FQ6_D-90-90.gif'>"], "<img src='img/abstract/FQ6_E-90-90.gif'>"),
    new Question("Which figure completes the series? <br> <img src='img/abstract/FQ4_0-984-250.gif'>", ["<img src='img/abstract/FQ4_A-90-90.gif'>", "<img src='img/abstract/FQ4_B-90-90.gif'>", "<img src='img/abstract/FQ4_C-90-90.gif'>", "<img src='img/abstract/FQ4_E-90-90.gif'>"], "<img src='img/abstract/FQ4_E-90-90.gif'>"),
    new Question("Which is the missing figure? <br> <img src='img/abstract/raster10.png'>", ["<img src='img/abstract/raster10_optie1.png'>", "<img src='img/abstract/raster10_optie2.png'>","<img src='img/abstract/raster10_optie3.png'>", "<img src='img/abstract/raster10_optie4.png'>"], "<img src='img/abstract/raster10_optie4.png'>"),
    new Question("Which is the missing figure? <br> <img src='img/abstract/abs.png'>", ["<img src='img/abstract/abs_opt1.png'>", "<img src='img/abstract/abs_opt2.png'>", "<img src='img/abstract/abs_opt3ans.png'>", "<img src='img/abstract/abs_opt4.png'>"], "<img src='img/abstract/abs_opt3ans.png'>"),     
    
    

    new Question("<img src='img/numerical/NUM_N46_Q9-984-250.gif'><br>Based on the table, the estimate for the number of accidents in September will be:", [ "78", "77", "76", "79"], "76"),
    new Question("<img src='img/numerical/NNUM-F_Q4-984-250.gif'> <br>If Go-Drink's annual sales of water were 20 million Euros in the European market and 20 million Japanese yen in the Asian market, what is the ratio of annual sales of water in the European market to that in the Asian market in Euros?", [ "1:1", "2:3", "4:5", "1:2"], "4:5"),              
    new Question("<img src='img/numerical/NUM_N48_Q7_Q8_Q9_Q10-984-250.gif'> <br>Assuming that unit sales in August, October and November were 600 for all branches, which of the following was the closest to its sales target?", [ "Rome", "Prague", "Bangkok", "Munich"], "Munich"),
    new Question("<img src='img/numerical/univ.gif'> <br> What was the decrease in the number of graduates in employment between 2002 and 2004?", [ "127" ,"138" ,"140" , "125"], "125"),
    new Question("<img src='img/numerical/taxi.gif'> <br> What is her average excess of income over expenditure per month to the nearest pound?", [ "16" ,"36" ,"6" , "56"], "6"),
    
                
                
    new Question("Select the right 3D Object. <br>  <img src='img/spatial/spatial_que2.png'>", [ "<img src='img/spatial/a.png'>" , "<img src='img/spatial/b.png'>", "<img src='img/spatial/c.png'>", "<img src='img/spatial/d.png'>"], "<img src='img/spatial/c.png'>"),
    new Question("Select the right 3D Object. <br> <img src='img/spatial/uitgevouwen(2).png'>", [ "<img src='img/spatial/fout(2).png'>" , "<img src='img/spatial/goed1(2).png'>", "<img src='img/spatial/goed2(2).png'>", "<img src='img/spatial/goed3(2).png'>"], "<img src='img/spatial/goed3(2).png'>"),              
    new Question("Select the right 3D Object. <br> <img src='img/spatial/uitgevouwen(8).png'>", [ "<img src='img/spatial/fout(8).png'>" , "<img src='img/spatial/goed1(8).png'>", "<img src='img/spatial/goed2(8).png'>", "<img src='img/spatial/goed3(8).png'>"], "<img src='img/spatial/goed2(8).png'>"),              
    new Question("Select the right 2D Object. <br> <img src='img/spatial/spat_que.png'>", [ "<img src='img/spatial/spat_opt1(ans).png'>" , "<img src='img/spatial/spat_opt2.png'>", "<img src='img/spatial/spat_opt3.png'>", "<img src='img/spatial/spat_opt4.png'>"], "<img src='img/spatial/spat_opt1(ans).png'>"),              
    
    
    new Question("<b>Statements</b>: Some oils are fluids. <br>Some solids are fluids. <br>Some vapors are solids. <br>No vapors are oil.<br><b>Conclusions:</b><br>I) Some oils are solid<br>II) Some fluids are vapors.<br>III) Some fluids are both oil and solid.<br>IV) Some solid are vapors.<br>Which are the correct conclusions?  ", [ "I only" ,"II and IV only" ,"IV only", "III only"], "IV only"),
    new Question(" Abdominal pain in children may be a symptom of emotional disturbance, especially where it appears in conjunction with phobias or sleep disorders such as nightmares or sleep-walking. It may also be linked to eating habits: a study carried out in the USA found that children with pain tended to be more fussy about what and how much they ate, and to have over-anxious parents who spent a considerable time trying to persuade them to eat. Although abdominal pain had previously been linked to excessive milk-drinking, this research found that children with pain drank rather less milk than those in the control group.<br> <b>Statement : Drinking milk may help to prevent abdominal pain in children</b>", [" The statement is DEFINITELY TRUE, or would be a reasonable conclusion to draw from the passage","The statement is DEFINITELY UNTRUE, or would not be a reasonable conclusion to draw." ,"I have INSUFFICIENT INFORMATION to answer either of the above with any certainty", "None of the above"], "I have INSUFFICIENT INFORMATION to answer either of the above with any certainty"),
    new Question("<b>There is no kid that doesn’t like chocolate.</b> <br> What inference can be drawn from this sentence?", [ "Everyone who likes chocolate is a kid." , "All kids like chocolate." , "There are kids that don’t like chocolate.", "Only kids like chocolate."], "All kids like chocolate."),
    new Question("Gavin beat Jerry in a marathon race wearing Dada running shoes. Dada came out, on the same day, with an ad campaign saying that their new Dada shoes made Gavin win. <br> Which of the following facts weakens Dada’s conclusion?", [ "Jerry was unwell on the day of the marathon." ,"Gavin has never beaten Jerry in previous marathons." ,"Jerry took steroids to increase his performance on the day of the marathon.", "Jerry has been considered the fastest marathon runner till now."], "Jerry was unwell on the day of the marathon."),
    new Question(" Prose    is to   Poetry <br> as  <br> Conversation    is to ________  ?", [ "Song" ,"Poem" ,"Language", "Listening"], "Song"),
    new Question("Statement 1: All women are architects <br>  Statement 2: At least a part of the soccer players are not architects <br> <b>What conclusion can you draw based on these statements?<b>", [ "   All women are soccer players " ,"None of the women are architects " ,"None of the above answers is a correct conclusion", "All soccer players are men"], "All women are soccer players"),


    new Question("<b>Internet escrow</b> is a term most commonly related to which of the following?", [ "Software Development" ,"E-commerce" ,"Privacy Security", "Database Management"], "E-commerce"),
    new Question("What would be the number of bytes, transferred at the rate of 1 Kilobit per second? ", [ "100" ,"125" ,"140", "108"], "125"),
    new Question("News websites deliver customized ‘feeds’ of content to their readers via RSS, which stands for :", [ "Really Simple Syndication" ,"Real Social Syndication" ,"Registered Subscriber Syndication", "Really Simple Synchronization"], "Really Simple Syndication"),
    new Question("URL stands for ?", [ "Uniform Resource Link" ,"Unified Resource Locator" ,"Uniform Resource Locator", "Unified Resource Link"], "Uniform Resource Locator"),
    new Question("____ are self replicating malicious code independent of the action of user and slow down the processor on entering a network", [ "Worm" ,"Ransomware" ,"Trojan Horse", "Virus"], "Trojan Horse"),
    new Question("Who proposed the underlying technical system upon which decentralized cryptocurrencies are based?", [ "Vint Cerf " ," Kiyoshi Akira" ,"John McCarthy", "Satoshi Nakamoto"], "Satoshi Nakamoto"),

];

// create quiz

var quiz = new Quiz(questions);

// display quiz
populate();