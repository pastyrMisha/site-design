<?php

namespace App;

/**
 * @property mixed|null project
 * @property mixed|null blog
 * @property mixed|null category
 * @property mixed|null rubric
 * @property string title
 * @property string mainTitle
 * @property mixed|null projects
 */
class View implements \Countable, \ArrayAccess
{
    /**
     * @var object $data
     */
    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
       return $this->data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function render($template)
    {
        ob_start();
        include __DIR__ . '/../header.php';
        include $template;
        include __DIR__ . '/../footer.php';
        return ob_get_clean();
    }

    public function display($template)
    {
        include $template;
        return $template;
    }

    public function error()
    {
        $this->title = 'Страница не найдена';
        $this->mainTitle = 'ERROR 404: Страница не найдена!';
        ob_start();
        include __DIR__ . '/../header.php';
        include __DIR__ . '/..' . '/Views/page-not-found.php';
        include __DIR__ . '/../footer.php';
        return ob_get_clean();
    }

    public function count(): int
    {
        return count($this->data);
    }

    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->data[$offset]) ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }
}

