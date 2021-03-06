/*
---
description: The method, using sieve of Eratosthenes, identifies all prime numbers up to a given number n.

authors:
  - Adrian Statescu (http://thinkphp.ro)

license:
  - MIT-style license

requires:
  core/1.3: '*'

provides:
  - Number.toEratosthenes
...
*/

Number.implement({toEratosthenes:function(){var arr=[],nr=maxsize=this.toInt();this.sieve=[];for(var k=0,l=(parseInt(maxsize/16)+1);k<=l;k++){this.sieve[k]=0}for(var i=2;(i*i)<=maxsize;i++){if(this.isOne(this.sieve[parseInt(i/16)],i%16)==0){j=2;while(j*i<=maxsize){var aux=1;aux<<=(j*i)%16;this.sieve[parseInt((j*i)/16)]|=aux;j++}}}for(var i=2;i<=nr;i++){if(this.isPrime(i)){arr.push(i)}}return arr},isPrime:function(n){return !this.isOne(this.sieve[parseInt(n/16)],n%16)},isOne:function(nr,pos){return(nr>>pos)&1}});