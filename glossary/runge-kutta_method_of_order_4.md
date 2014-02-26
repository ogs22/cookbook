A method for the numerical solution of first order differential
equations: given equation
!['  (dy)/(dx) = f(x,y)  '](../dictionary/equation_images/1743.1..png)
and a starting point x~0~, y~0~, values of y~i+1~ for x~i~=x~i~+h are
given approximately by

y~i+1~=y~i~+(k~1~+2k~2~+2k~3~+k~4~),\
 where k~1~=hf(x~i~, y~i~),\
 k~2~=hf(x~i~+h/2, y~i~+k~1~/2),\
 k~3~=hf(x~i~+h/2, y~i~+k~2~/2),\
 k~4~=hf(x~i~+h, y~i~+k~3~).
