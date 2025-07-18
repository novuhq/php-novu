<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


/** Source of workflow creation */
enum WorkflowCreationSourceEnum: string
{
    case TemplateStore = 'template_store';
    case Editor = 'editor';
    case NotificationDirectory = 'notification_directory';
    case OnboardingDigestDemo = 'onboarding_digest_demo';
    case OnboardingInApp = 'onboarding_in_app';
    case EmptyState = 'empty_state';
    case Dropdown = 'dropdown';
    case OnboardingGetStarted = 'onboarding_get_started';
    case Bridge = 'bridge';
    case Dashboard = 'dashboard';
}
