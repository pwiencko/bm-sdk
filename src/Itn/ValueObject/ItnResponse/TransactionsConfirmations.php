<?php
declare(strict_types=1);

namespace BlueMedia\Itn\ValueObject\ItnResponse;

use JMS\Serializer\Annotation\Type;
use BlueMedia\Serializer\SerializableInterface;
use BlueMedia\Itn\ValueObject\ItnResponse\TransactionConfirmed;

final class TransactionsConfirmations implements SerializableInterface
{
    /**
     * @var TransactionConfirmed
     * @Type("BlueMedia\Itn\ValueObject\ItnResponse\TransactionConfirmed")
     */
    private TransactionConfirmed $transactionConfirmed;

    /**
     * @return TransactionConfirmed
     */
    public function getTransactionConfirmed(): TransactionConfirmed
    {
        return $this->transactionConfirmed;
    }
}
