A test which is used to measure how well a given set of observations fit
a particular discrete distribution. If the theoretical distribution says
that value x~i~ should occur E~i~ times, and it actually occurs O~i~
times, then: \\

![' //chi \^2 =  the sum of  \_(i) ( ( O\_(i)  - E\_(i) ) \^2 )/ ( E\_(i)
) '](../dictionary/equation_images/4104.1..png)

has a chi-squared distribution with n-p degrees of freedom, where p is
the number of distribution parameters used in calculating the E~i~.

So if !['  //chi \^2  '](../dictionary/equation_images/4104.2..png) is
large, we reject the hypothetical distribution - eg if it is large
enough to have probability smaller than 5 percent, we would say that the
test gave a result that was significant at the 5 percent level, and we
would probably reject the hypothesis.

The test can be used to test for a continuous distribution, by grouping
the data - but we must be careful not to obtain spurious results by
grouping the data arbitrarily.

Also if several of the E~i~ are smaller than about 5, the test cannot be
used without modifications.
