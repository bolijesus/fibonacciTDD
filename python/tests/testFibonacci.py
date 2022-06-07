import unittest

class testFibonacci(unittest.TestCase):
    
    def testStaticWhitNumberOneFibonacci(self):
        fibonacci = new Fibonacci()
        self.assertEqual([0,1], fibonacci.calcular(1))

    if __name__ == "__main__":
        unittest.main()
