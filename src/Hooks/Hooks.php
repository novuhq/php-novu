<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace novu\Hooks;

interface Hooks
{
    public function registerSDKInitHook(SDKInitHook $hook): void;
    public function registerBeforeRequestHook(BeforeRequestHook $hook): void;
    public function registerAfterSuccessHook(AfterSuccessHook $hook): void;
    public function registerAfterErrorHook(AfterErrorHook $hook): void;
}


