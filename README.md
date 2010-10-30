Number.toEratosthenes
=====================

A prime number is a natural number greater than 1 that can be divided without remainder only by itself and by 1. Natural numbers n
that can be divided by a number less than n and greater than 1 are composite numbers. Sieve of Eratosthenes identifies all prime numbers up to a given number n.
The algorithm works as follows: write the numbers 1, 2, 3,4 ,..., n and will eliminate composites by marking them (initially all numbers
are unmarked). This is exactly what the method does using bitwise operations.


![Screenshot](http://farm5.static.flickr.com/4127/5128361060_a16cbb5323.jpg)


How to use
----------

First you must to include the JS files in the head of your HTML document.

    #HTML
    <script type="text/javascript" src="mootools.js"></script>
    <script type="text/javascript" src="number.toEratosthenes.js"></script>

In your JavaScript code.

    #js 
    (function($){
        window.addEvent('domready',function(){
            $('f').addEvent('submit', function(e){
                if(e) {e.stop();}
                var n = $('n').get('value').toInt(); 
                if(!n) {return false;}
                   var vec = [];
                       vec = (n).toEratosthenes(); 
                   if(window.console){console.log(vec);} 
                   var s = ''; 
                       for(var i=0;i<vec.length;i++) {
                           s += vec[i] + ', ';
                       } 
                       $('primenumbers').set('text',s);
             }); 
             $('f').fireEvent('submit');  
        });         
     })(document.id);
 
In your HTML code.

    #html
    <form id="f" name="f">
    <label for="n">N = </label><input type="text" id="n" value="100"/><input type="submit" value="go">
    </form>  
    <div id="primenumbers"></div>
