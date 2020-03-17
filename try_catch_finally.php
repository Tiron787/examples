<?php
try {
    echo "В try вызвано исключение\n";
throw new StrangeException();
} catch (SomeException $e) {
    echo "Вызвано исключение SomeException \n";
} catch (AnotherException $e) {
    echo "Вызвано исключение AnotherException\n";
} finally {
    echo "Этот блок кода выполнится всегда\n";
}



