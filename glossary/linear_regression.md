A regression model for X on p which writes
!['  (E) ( X | p ) = //beta \_0 +  //beta \_1 p  '](../dictionary/equation_images/1326.3..png)
is called a linear regression.

Often we would assume that X is normally distributed with constant
variance !['  //sigma \^2  '](../dictionary/equation_images/1326.4..png)
(which is unknown, but independent of p). In this case if we have a
sample of n pairs of observations (p~i~, x~i~), we can find the maximum
likelihood estimators b~1~, b~2~ of
!['  //beta \_1,   //beta \_2  '](../dictionary/equation_images/1326.5..png)
by the method of least squares, ie we minimize
!['   the sum of  \_i ( x\_i - //beta \_0 - //beta \_1 p\_i)\^2 .  '](../dictionary/equation_images/1326.6..png)

These estimators are: \\

![' b\_1 =  ( the sum of  \_i ( p\_i - (bar)(p) ) ( x\_i - (bar)(x) ) )/  (  the sum of  \_i ( p\_i - (bar)(p) ) \^2 ) , '](../dictionary/equation_images/1326.1..png)

\\

![' b\_0 = (bar)(x) - b\_1 (bar)(p) , '](../dictionary/equation_images/1326.2..png)

where
!['  (bar)(p), (bar)(x)  '](../dictionary/equation_images/1326.7..png)
are the means of the p~i~ and x~i~:
!['  (bar)(p) =  the sum of  \_i (p\_i)/(n)  '](../dictionary/equation_images/1326.8..png)
and
!['  (bar)(x) =  the sum of  \_i (x\_i)/(n) .  '](../dictionary/equation_images/1326.9..png)
