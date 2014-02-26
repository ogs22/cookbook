If we have a set of n objects, and we want to turn this into a set of k
lists where the order of elements in a list matters, but cyclic
permutations do not (ie each list is a cycle) - then the number of ways
to do this is called the Stirling number of the first kind s(n,k).

Eg if we have the set {1,2,3,4} we can turn it into the following sets
of 3 cycles:

{{1,3,2},{4}}\
 {{1,2,3},{4}}\
 {{1,4,2},{3}}\
 {{1,4,2},{3}}\
 {{1,2,4},{3}}\
 {{1,2},{3,4}}\
 {{1,4,3},{2}}\
 {{1,3,4},{2}}\
 {{1,3},{2,4}}\
 {{1,4},{2,3}}\
 {{1},{2,4,3}}\
 {{1},{2,3,4}}

So s(4,2)=11.
