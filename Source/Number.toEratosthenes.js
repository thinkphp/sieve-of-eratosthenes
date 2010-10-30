/*
---
description: The method, using sieve of Eratosthenes, identifies all prime numbers up to a given number n.

authors:
  - Adrian Statescu (http://thinkphp.ro)

license:
  - MIT-style license

requires:
  core/1.3:   '*'

provides:
  - Number.toEratosthenes
...
*/

Number.implement({
       toEratosthenes: function() {
             //define an array to push the prime numbers.
             var arr = [],
                 //up to n and convert to integer.
                 nr = maxsize = this.toInt();
             //define sieve of eratosthenes
             this.sieve = [];
             //initially, the elements of sieve are zero
             for(var k=0;i<=parseInt(maxsize/16)+1;k++) {
                 this.sieve[k] = 0; 
             } 
             //mark the composite numbers.
             for(var i=2;(i*i)<=maxsize;i++) {
                 if(this.isOne(this.sieve[parseInt(i/16)],i%16) == 0) {
                        j = 2;
                        while(j*i<=maxsize) {
                              var aux = 1; aux <<= (j*i)%16;
                              this.sieve[parseInt((j*i)/16)] |= aux;
                              j++;
                        }//end while         
                 }//endif
             }//endfor

             //put the remaining unmarked numbers in the 
             //sequence on my listof prime numbers.
             for(var i=2;i<=nr;i++) {
                 if(this.isPrime(i)) {
                    arr.push(i); 
                 }
             }
         return arr; 
      },
      isPrime: function(n) {
              return !this.isOne(this.sieve[parseInt(n/16)],n%16);
      },
      isOne: function(nr,pos) {
              return (nr>>pos)&1;
      }   
});

