<?php
require_once 'autoload.php';

use App\Caretaker\Caretaker;
use App\Originator\Originator;

$caretaker = new Caretaker();
$originator = new Originator();

echo 'いまからデザインパターンをGoF本の出展順で登録していくぞ。<br><br>';

$originator->addList('Iterator パターン');
$originator->addList('Adapter パターン');
$originator->addList('TemplateMethod パターン');

echo 'まずは３つ登録。出力してみよう。<br>';
echo '<ol>';
$originator->display();
echo '</ol>';

echo 'まだまだ、がんばろう。<br><br>';

$originator->addList('FactoryMethod パターン');
$originator->addList('Singleton パターン');
$originator->addList('Prototype パターン');

echo 'ふう、やっと６個。出力してみよう。<br>';
echo '<ol>';
$originator->display();
echo '</ol>';

echo 'いいね、ここで一旦スナップショットを取っておこう。<br><br>';
$caretaker->setSnapshot($originator->createMemento());


$originator->addList('Builder パターン');
$originator->addList('AbstractFactory パターン');
$originator->addList('Bridge パターン');
$originator->addList('Composite パターン');

echo 'ここで１０個か、もう少しだ。出力してみよう。<br>';
echo '<ol>';
$originator->display();
echo '</ol>';

echo 'あ！Strategy パターンを入れ忘れてる！うむむ、、リストアしよう。<br><br>';
$originator->restoreMemento($caretaker->getSnapshot());

echo 'リストアできているかな？<br>';
echo '<ol>';
$originator->display();
echo '</ol>';

echo 'ちゃんとリストアできてた！よーしこのまま一気にいくぞ！<br><br>';

$originator->addList('Builder パターン');
$originator->addList('AbstractFactory パターン');
$originator->addList('Bridge パターン');
$originator->addList('Strategy パターン');
$originator->addList('Composite パターン');
$originator->addList('Decorator パターン');
$originator->addList('Visitor パターン');
$originator->addList('ChainOfResponsibility パターン');
$originator->addList('Facade パターン');
$originator->addList('Mediator パターン');
$originator->addList('Observer パターン');
$originator->addList('Memento パターン');
$originator->addList('State パターン');
$originator->addList('Flyweight パターン');
$originator->addList('Proxyパターン');
$originator->addList('Command パターン');
$originator->addList('Interpreter パターン');

echo '<ol>';
$originator->display();
echo '</ol>';

echo 'よしできた！ふう、よかったよかった。';