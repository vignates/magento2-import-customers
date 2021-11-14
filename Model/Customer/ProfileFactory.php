<?php
/**
 * ProfileFactory
 *
 * @author    vignesh.muthuswamy@gmail.com
 */
declare(strict_types=1);

namespace Wunderman\Import\Model\Customer;

use Magento\Framework\ObjectManagerInterface;

class ProfileFactory
{
    /**
     * Object manager
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * Create class instance with specified parameters
     * @throws \Exception
     */
    public function create(string $type): ImportInterface
    {
        if ($type === "sample-csv") {
            $class = CsvImporter::class;
        } elseif ($type === "sample-json") {
            $class = JsonImporter::class;
        } else {
            throw new \Exception("Unsupported Profile type specified");
        }
        return $this->objectManager->create($class);
    }
}
