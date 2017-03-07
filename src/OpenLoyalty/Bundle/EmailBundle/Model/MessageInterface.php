<?php
/*
 * This file is part of the "misrmart" package.
 *
 * (c) Divante Sp. z o. o.
 *
 * Author: Cezary Olejarczyk
 * Date: 10.02.17 13:20
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpenLoyalty\Bundle\EmailBundle\Model;

/**
 * Interface MessageInterface.
 */
interface MessageInterface
{
    /**
     * @return string
     */
    public function getSubject(): string;

    /**
     * @param string $subject
     */
    public function setSubject(string $subject);

    /**
     * @return string
     */
    public function getRecipientEmail(): string;

    /**
     * @param string $recipientEmail
     */
    public function setRecipientEmail(string $recipientEmail);

    /**
     * @return string
     */
    public function getRecipientName(): string;

    /**
     * @param string $recipientName
     */
    public function setRecipientName(string $recipientName);

    /**
     * @return string
     */
    public function getSenderEmail(): string;

    /**
     * @param string $senderEmail
     */
    public function setSenderEmail(string $senderEmail);

    /**
     * @return string
     */
    public function getSenderName(): string;

    /**
     * @param string $senderName
     */
    public function setSenderName(string $senderName);

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     */
    public function setContent(string $content);

    /**
     * @return string|null
     */
    public function getPlainContent();

    /**
     * @param string $plainContent
     */
    public function setPlainContent(string $plainContent);

    /**
     * @param string|null $template
     */
    public function setTemplate(string $template = null);

    /**
     * @return string
     */
    public function getTemplate(): string;

    /**
     * @param array $params
     */
    public function setParams(array $params);

    /**
     * @return array
     */
    public function getParams(): array;
}
