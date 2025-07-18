<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Models\Components;


/** The provider identifier for the credentials */
enum ChatOrPushProviderEnum: string
{
    case Slack = 'slack';
    case Discord = 'discord';
    case Msteams = 'msteams';
    case Mattermost = 'mattermost';
    case Ryver = 'ryver';
    case Zulip = 'zulip';
    case GrafanaOnCall = 'grafana-on-call';
    case Getstream = 'getstream';
    case RocketChat = 'rocket-chat';
    case WhatsappBusiness = 'whatsapp-business';
    case ChatWebhook = 'chat-webhook';
    case Fcm = 'fcm';
    case Apns = 'apns';
    case Expo = 'expo';
    case OneSignal = 'one-signal';
    case Pushpad = 'pushpad';
    case PushWebhook = 'push-webhook';
    case PusherBeams = 'pusher-beams';
}
