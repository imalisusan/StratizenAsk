<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<style>
*,

=======
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>FAQs</title>
  <link href="https://unpkg.com/ionicons@5.10.0/dist/css/ionicons.min.css" rel="stylesheet">
    <style>
        *,
*::before,
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
*::after{
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
html{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	font-family: 'Sans';
	font-size: 15px;
	box-sizing: border-box;
}
.accordion{
	text-align: center;
	font-size: 1.6rem;
	background-color: white;

=======
  font-family: 'Roboto', sans-serif;
  font-size: 10px;
  box-sizing: border-box;
}
=======
  font-family: 'Roboto', sans-serif;
  font-size: 10px;
  box-sizing: border-box;
}
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
  font-family: 'Roboto', sans-serif;
  font-size: 10px;
  box-sizing: border-box;
}
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
section{
  width: 100%;
  height: 100vh;
  background-color: darkslategray;
  display: flex;
  align-items: center;
  justify-content: center;
}
.accordion{
  text-align: center;
  font-size: 3.0rem;
  background-color: coral;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
}
.container{
  width: 100%;
  max-width: 80rem;
  margin: 0 auto;
  padding: 0 1.5rem;
}
.accordion-item{
  background-color: coral;
  border-radius: 4rem;
  margin-bottom: 1rem;
  padding: 1rem;
  box-shadow: .5rem 2px, 5rem rgba(0,0,0,.1);
}
.accordion-link{
  font-size: 1.6rem;
  color: rgba(255,255,255,8);
  text-decoration: none;
  background-color: darkslategrey;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content:space-between;
  padding: 1rem 0;
}
.accordion-link 1{
  color: darkslategrey;
  padding: 5rem;
}
.accordion-link .ion-and-remove{
  display: none;
}
.answer{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	max-height: 0;
	overflow: hidden;
	position: relative;
	background-color: lightblue;
  transition: max-height 1000ms;
	font-size: 15px;
}
.answer p{
	font-size: 15px;
	font-color:white;
	padding: 2rem;
=======
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
  max-height: 0;
  overflow: hidden;
  position: relative;
  background-color: antiquewhite;
  transition: max-height 1000ms;
  font-size: 2.5rem;
}
.answer::before{
  content: "";
  position: absolute;
  width: .6rem;
  height: 100%;
  background-color: lime;
  top: 50%
  left:0;
  transform: translateY(-50%);
  font-size: 2.5rem;
}
.answer p{
  font-size: 2.5rem;
  color: rgba(255,255,255,0);
  padding: 2rem;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
}
.accordion-item:target .accordion-link .ion-md-add{
  display: none;
}
.accordion-item:target .accordion-link .ion-md-remove{
  display: block;
}
.accordion-item:target .answer{
  max-height: 60rem;
}
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


=======
=======
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
    <section>
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
        
        <div class="container">
        <div class="accordion">
             <h1>Frequently Asked Questions(FAQs)</h1>
            <div class="accordion-item" id="question1">
                <a class="accordion-link" href="#question1">
                   What does it mean if a question is closed?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
               <p> Closed questions cannot be answered, but can be edited to make them eligible for reopening. If your question is closed, you will receive private feedback on the reason why it was closed.</p>
                  
              </div>
            </div>
            
            <div class="accordion-item" id="question2">
                <a class="accordion-link" href="#question2">
                What does it mean when an answer is "accepted"?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
               <p> When a user receives a good answer to their question, that user has the option to "accept" an answer. Acceptance is indicated by a colored checkmark next to the answer that has been accepted by the original author of the question.</p>
                 
              </div>
            </div>
            <div class="accordion-item" id="question3">
                <a class="accordion-link" href="#question3">
                Why are some questions deleted?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
               <p>Questions that are extremely off topic, or of very low quality, may be removed at the discretion of the community and moderators.<p>
                  
              </div>
            </div>
            <div class="accordion-item" id="question4">
                <a class="accordion-link" href="#question4">
                What are tags, and how should I use them?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
              <p> Tags are used to help you identify questions that are interesting or relevant to you.Clicking on a tag allows yoy to see a description of what the tag is and how it should be applied on StratizenAsk.As a general rule, you should avoid creating new tags if possible, and new users are not allowed to create new tags. Even if you have sufficient reputation, you should only create new tags when you feel you can make a strong case that your question covers a new topic that nobody else has asked about before on this site.</p>

=======
               Tags are used to help you identify questions that are interesting or relevant to you.Clicking on a tag allows yoy to see a description of what the tag is and how it should be applied on StratizenAsk.As a general rule, you should avoid creating new tags if possible, and new users are not allowed to create new tags. Even if you have sufficient reputation, you should only create new tags when you feel you can make a strong case that your question covers a new topic that nobody else has asked about before on this site.
>>>>>>> parent of 4dfb59b... 00_Laravel search functionality 01_ FAQ UI modification
=======
               Tags are used to help you identify questions that are interesting or relevant to you.Clicking on a tag allows yoy to see a description of what the tag is and how it should be applied on StratizenAsk.As a general rule, you should avoid creating new tags if possible, and new users are not allowed to create new tags. Even if you have sufficient reputation, you should only create new tags when you feel you can make a strong case that your question covers a new topic that nobody else has asked about before on this site.
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
=======
               Tags are used to help you identify questions that are interesting or relevant to you.Clicking on a tag allows yoy to see a description of what the tag is and how it should be applied on StratizenAsk.As a general rule, you should avoid creating new tags if possible, and new users are not allowed to create new tags. Even if you have sufficient reputation, you should only create new tags when you feel you can make a strong case that your question covers a new topic that nobody else has asked about before on this site.
>>>>>>> parent of 25e1103... Merge pull request #37 from imalisusan/imali
                  
              </div>
            </div>
            
            <div class="accordion-item" id="question5">
                <a class="accordion-link" href="#question5">
                Can I answer my own question?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
              <p>Yes! StratizenAsk has always explicitly encouraged users to answer their own questions. If you have a question that you already know the answer to, and you would like to document that knowledge in public so that others (including yourself) can find it later, it's perfectly okay to ask and answer your own question on this site.</p>
                  
              </div>
            </div>
            <div class="accordion-item" id="question6">
                <a class="accordion-link" href="#question6">
                What is the role of the Faculty?
                <i class="icon ion-md-add"></i>
                <i class="icon ion-md-remove"></i>
              </a>  
              <div class="answer">
                
             <p> We generally expect that the faculty: Are patient and fair, lead by example, show respect for their fellow community members in their actions and words, are open to some light but firm moderation to keep the community on track and resolve (hopefully) uncommon disputes and exceptions.</p>
                  
              </div>
            </div>
        </div>  
        </div>
<<<<<<< HEAD
    
=======
    </section>
>>>>>>> parent of 49f973d... Merge pull request #36 from imalisusan/Whitneycommits
    @endsection
</body>
</html>