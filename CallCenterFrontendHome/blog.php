<?php include "header.php"; ?>

    <title>Blog </title>

    <div class= "blog"> 

<h1 class = "tips"> Tips for working at  <br> CoderCall </h1>
<div class="grid">
<div class="content flow">
  <h2 class="title">Focus on finding the source of the problem</h2>
  <p>When callers describe the issue they are encountering, they often don't understand the source of their own problem. 
      For example, if a customer says their internet isn't working, that could be due to a variety of underlying issues. 
      Troubleshoot <span id="dots">....</span><span id="more"> for these issues by asking questions about their specific situation. This can help you assist callers more efficiently.</span></p>
    <img src = "photos/focus.jpg" height="70" width="150">
    <button onclick="myFunction()" id="myBtn">Read more</button>
</div>
<div class="content flow featured">
  <h2 class="title">Introduce yourself</h2>
  <p>While it may seem minor, introducing yourself by name is a great way to start a call on a personal basis. This can help customers feel more at ease after calling with frustrating concerns. It might even be beneficial to ask the customer for their name, too—this could make the call feel more conversational.</p>
  <img src = "photos/yourself.png" height="100" width="150">
</div> 
<div class="content flow"> 
  <h2 class="title">Take notes on calls</h2>
  <p>It's helpful to take notes when a customer describes their issue or asks a specific question you may not know the answer to. These notes can help you assist the customer effectively without getting confused or forgetting key information. This will also make it easier to relay questions or details to others in your organization if you need help finding a solution. </p>
  <img src = "photos/notes.png" height="70" width="150">
</div>
<div class="content flow">
  <h2 class="title">Apologize</h2>
<p>While you are not to blame for the issues customers experience, apologizing for the problem can help customers feel respected and understood. This will lead to more productive conversations and favorable outcomes for both you and the customer in the long run.</p>
<img src = "photos/apologise.jpg" height="100" width="150">
</div>

<div class="content flow">
  <h2 class="title">Be positive</h2>
  <p>This tip may seem like common sense, but keeping a positive attitude as a call center agent is key. Most of your workday is spent interacting with stressed customers, so your positive attitude can make an enormous difference in the conversation's overall flow.</p>
  <img src = "photos/positive.jpg" height="70" width="150">
</div>
<div class="content flow">
  <h2 class="title">Do your research</h2>
<p>Many customers will have already done at-home troubleshooting before calling service centers—calling for help is often a last resort. Therefore, they're looking to you for expert advice and problem-solving abilities that they can't find online or in manuals. To offer the best possible assistance, it's a good idea to research and study the technical intricacies of your company's products or services.</p>
</div>
<div class="content flow">
  <h2 class="title">Act natural</h2>

</div>
<div class="content flow">
  <h2 class="title">Don't tell callers you're new</h2>
<p>Customers call service centers seeking experienced professionals 
    with advanced knowledge about the products and services they're 
    experiencing issues with. Because of this, it's best to avoid telling customers you're new—they don't need that information, 
    especially if you do your best to solve their issues constructively.</p>
    <h4> Related:  <a href="https://www.youtube.com/watch?v=_bZi-34IFxs" 
        target="_blank">Building Skills to Be a Great Call Center Employee</a> </h4>
</div>
<div class="content flow">
  <h2 class="title">Pay attention </h2>
<p>It's easy to lose focus or become distracted during a long day of work, but practicing active listening and paying close attention to the particularities of a customer's issue will serve you well. This way, you won't lose track of crucial details and you can help solve their problems in a timely manner.</p>
<img src = "photos/attention.jpg" height="70" width="150">
</div>
  </div>

</div>


  <script>
      function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
  </script>




<?php include "footer.php"; ?>