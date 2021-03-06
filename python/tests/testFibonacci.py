import sys
sys.path.insert(1, 'python/')
import unittest

from src.Fibonacci import Fibonacci

class PruebasUnitarias(unittest.TestCase):

    def test_StaticWhitNumberOneFibonacci(self):
        fibonacci = Fibonacci()
        self.assertEqual(0, fibonacci.calcular(1))

    def test_StaticWhitNumberTwoFibonacci(self):
        fibonacci = Fibonacci()
        self.assertEqual([0,1], fibonacci.calcular(2))
    
    def test_NumberOfDigitsForFunctionFibonacci(self):
        fibonacci = Fibonacci()
        self.assertEqual([0,1,1,2,3,5,8,13], fibonacci.calcular(8))
        
if __name__ == '__main__':
    unittest.main()