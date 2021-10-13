from PyQt5.QtWidgets import QApplication, QWidget
import sys
app = QApplication(sys.argv)
w = QWidget()
w.resize(300,300)
w.setWindowTitle("Ha vai")
w.show()
sys.exit(app.exec_())