A way of evaluating the discrete Fourier transform quickly.

We are evaluating \\

![' F(u) = (1)/(N)   the sum of \_(x=0) \^(N-1) f(x)e   \^(-2 //pi xu/N) '](../dictionary/equation_images/383.1..png)

for N values of u.

The fast Fourier transform method can evaulate this with number of
operations O(N.log~2~N).

Let
!['  //omega \_(N) = e \^( - 2 //pi i/N ) ,  '](../dictionary/equation_images/383.4..png)
and let M=N/2.

Let \\

![' F\_(even) ( u ) =   (1)/(M)  the sum of  \_(x = 0 ) \^(M - 1 )  f(2x) //omega \_(M) \^(xu) '](../dictionary/equation_images/383.2..png)

and let \\

![' F\_(odd) ( u ) =   (1)/(M)  the sum of  \_(x = 0 ) \^(M - 1 )  f(2x+1) //omega \_(M) \^(xu) . '](../dictionary/equation_images/383.3..png)

Then we have
!['  F(u) =   (1)/(2) ( F\_(even) ( u )   + F\_(odd) ( u ) //omega \_(2 M) \^(u) ) ,  '](../dictionary/equation_images/383.5..png)

and
!['  F(u) =   (1)/(2) ( F\_(even) ( u )   - F\_(odd) ( u ) //omega \_(2 M) \^(u) )  '](../dictionary/equation_images/383.6..png)
for u=0,...M-1.

Each of F~even~ and F~odd~ is a discrete Fourier transform over M
points, so we can apply this technique recursively to reduce the number
of operations that have to be performed.
