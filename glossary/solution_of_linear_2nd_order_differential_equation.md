To solve the differential equation
!['  (d\^2 y)/(dx\^2) + a (dy)/(dx)  + by = f(x),  '](../dictionary/equation_images/2060.1..png)
we proceed as follows:

Find and solve the auxiliary equation; it has solutions m and n.

Find the complementary function:\
 If m and n are distinct and real, the complementary function is
!['  y = Ae\^(mx) + Be\^(nx) ;  '](../dictionary/equation_images/2060.2..png)\
 If m and n are real and equal, the CF is
!['  y = Ae\^(mx) + Bxe\^(mx) ;  '](../dictionary/equation_images/2060.3..png)\
 If m and n are complex, with m=a+bi, n=a-bi, then the CF is
!['  y = e\^(ax) ( A //sin (bx) + B //cos (bx) ) .  '](../dictionary/equation_images/2060.4..png)

Next find a particular integral, by setting y=P(x)=px^2^+qx+r or
similar, substituting into the original equation and equating
coefficients of like terms to find p, q and r. (The form of P(x) which
we guess should be the same as the form of f(x), though often with an
extra term - for instance if f(x) is a linear function we would let P(x)
be a quadratic.)

Now, the general solution is equal to the general CF, plus the
particular integral.
