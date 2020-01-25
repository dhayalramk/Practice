#include <iostream>
using namespace std;

/**
 * Problem: https://www.geeksforgeeks.org/sum-of-squares-of-first-n-natural-numbers/
 *
 * Algorithm:
 *     1) Get the number n
 *     2) Apply n*(n+1)*(2n+1) / 6 formulae
 *     3) Display the result
 *
 * @author dhayalram.k@gmail.com
 *
 * Link to execute: https://ide.geeksforgeeks.org/0cSZyc4hE8
 *
 */
int main() {
	int n = 1000;
	cout<<(n * (n+1) * ( (2*n) +1 ))/6;
	return 0;
}
