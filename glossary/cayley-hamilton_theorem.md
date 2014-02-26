Every square matrix satisfies its own characteristic equation.

ie: if A is a square matrix\
 and
!['   | xI - A  | = f(x),  '](../dictionary/equation_images/2607.6..png)\
 (so f(x) is the characteristic polynomial of A, and f(x)=0 is the
characteristic equation of A),

then the Cayley-Hamilton theorem says that f(A) = 0.

eg: Let
!['  A =  (  ( 1   3 //////// 4   5 )  )  '](../dictionary/equation_images/2607.7..png),
then

!['  f(x) =  | xI - A  |  '](../dictionary/equation_images/2607.8..png)
\\

![' =  |  ( ( x -1)   3 //////// 4   ( x -5) )  | '](../dictionary/equation_images/2607.1..png)

\\

![' = (x-1)(x-5) - 12 '](../dictionary/equation_images/2607.2..png)

\\

![' = x\^2 -6 x -7 '](../dictionary/equation_images/2607.3..png)

Then, working in matrices rather than ordinary numbers (so we have 7.I
instead of 7),
!['  f(A) =  (  ( 1   3 //////// 4   5 )  ) \^2 - 6    (  ( 1   3 //////// 4   5 )  ) -  (  ( 7   0 //////// 0   7 )    )  '](../dictionary/equation_images/2607.9..png)
\\

![' =  (  ( 13   18 //////// 24   37 )  )   -  (  ( 6   18 //////// 24   30 )  )   -  (  ( 7   0 //////// 0   7 )  ) '](../dictionary/equation_images/2607.4..png)

\\

![' =  (  ( 0   0 //////// 0   0 )  ) '](../dictionary/equation_images/2607.5..png)
