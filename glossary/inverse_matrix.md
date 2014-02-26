The matrix which gives the identity matrix when multiplied by a given
matrix.

The inverse, A^-1^, of a 2 × 2 matrix can be found by swapping the top
left and bottom right entries, changing the sign of the other two
entries, and dividing by the determinant: \\

![' A =    (  ( a   b //////// c   d )  ) '](../../../dictionary/equation_images/10195.1..png)

\\

![' mathrm(det(A) = ad - bc) '](../../../dictionary/equation_images/10195.2..png)

\\

![' (so, ) A\^(-1) = (1)/(ad - bc)    (  ( d   - b //////// - c   a )  ) '](../../../dictionary/equation_images/10195.3..png)

Check; we must have A × A^-1^ = I: \\

![' A × A\^(-1) =    (  ( a   b //////// c   d )  )   (1)/(ad - bc)    (  ( d   - b //////// - c   a )  ) '](../../../dictionary/equation_images/10195.4..png)

\\

![' = (1)/(ad - bc)    (  ( (ad-bc)   (-ab + ba) ////////   (cd - cd)   (-bc + ad) )  ) '](../../../dictionary/equation_images/10195.5..png)

\\

![' =  (  (1   0 //// 0   1 )  ) '](../../../dictionary/equation_images/10195.6..png)

\\

![' = I '](../../../dictionary/equation_images/10195.7..png)

\

The inverse of a 3 × 3 matrix A can be found by dividing the adjoint of
A by the determinant of A: \\

![' A =    (  ( a   b   c   //////// d   e   f   //////// g   h   i )  ) '](../../../dictionary/equation_images/10195.8..png)

\\

![' det(A) = a(ei - hf) - b(di-gf) + c(dh - eg) '](../../../dictionary/equation_images/10195.9..png)

so, \\

![' A\^(-1) = (1)/( a(ei - hf) - b(di-gf) + c(dh - eg) )   (  (a   b   c   //////// d   e   f   //////// g   h   i )  )   =  (  (
(ei - hf)   (hc - bi)   (bf - ec) ////////  (gf - di)   (ai - gc)   (dc - af) ////////  (dh - ge)   (gb - ah)   (ae - db) )  ) '](../../../dictionary/equation_images/10195.10..png)
