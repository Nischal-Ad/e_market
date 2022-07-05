using System;
class Prime{
	 public static void Main(string[] args)  
      {  
          int n , i, count = 0;    
   for(n=2; n<=10 ; n++){
       for(i=1; i<n ; i++){
           if (n%i == 0){
count++;
           }
           if(count == 1){
               Console.Writeline(n);
           }
       }
   }
   }