<?php
declare(strict_Types=1);
use PHPUnit\Framework\TestCase;

final class ImageTest extends TestCase
{
    /**
     * @test
     * Checks to ensure the raw images are named correctly
     * Files live in ../traits_raw/*
     */
    public function testRawImageFileNamedCorrectly(): void
    {
        $files = glob(__DIR__ ."/../../traits_raw/*/*.*");
        foreach($files as $file) {
            $filename = basename($file);
            $this->assertMatchesRegularExpression('/^\w+\_\w+\_\w+\.png$/', $filename);
        }
    }
}