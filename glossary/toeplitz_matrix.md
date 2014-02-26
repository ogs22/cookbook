A type of matrix defined by a column vector c and a row vector r. If c
has elements c~i~, i=1...m, and r has elements r~i~, i=1...n, then the
Toeplitz matrix defined by them, T, is an n×m matrix with elements \\

![' t\_(i,j) =  //(  ( c\_(i-j+1),   i-j \>= 0 ////////  r\_(j-i+1),   j-i \> 0 . )  '](../dictionary/equation_images/1326.1..png)

eg if
!['  c=  (  ( 1 //////// 2 //////// 3 //////// 4 //////// 5 )  )  '](../dictionary/equation_images/1326.2..png)
and
!['  r=  (  ( 6   7   8   9 )  ) ,  '](../dictionary/equation_images/1326.3..png)
then
!['  T =  (  ( 1   6   7   8   9 ////////  2   1   6   7   8 ////////  3   2   1   6   7 ////////  4   3   2   1   6 ////////  5   4   3   2   1 )  ) .  '](../dictionary/equation_images/1326.4..png)
