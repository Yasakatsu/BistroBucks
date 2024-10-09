import React from "react";
import { Box, Flex, Link, IconButton, useDisclosure } from "@chakra-ui/react";
import { HamburgerIcon, CloseIcon } from "@chakra-ui/icons";

const Sidebar = () => {
    const { isOpen, onOpen, onClose } = useDisclosure();

    return (
        <Box>
            <Flex
                bg="gray.800"
                color="white"
                minH="100vh"
                direction="column"
                p={4}
                justifyContent="space-between"
                display={{ base: isOpen ? "block" : "none", md: "block" }}
            >
                <Link
                    href="/dashboard"
                    p={2}
                    rounded="md"
                    _hover={{ bg: "gray.700" }}
                >
                    売上入力
                </Link>
                <Link
                    href="/profile"
                    p={2}
                    rounded="md"
                    _hover={{ bg: "gray.700" }}
                >
                    コスト入力
                </Link>
                <Link
                    href="/sale/dashboard"
                    p={2}
                    rounded="md"
                    _hover={{ bg: "gray.700" }}
                >
                    メニュー登録
                </Link>
                <Link
                    href="/sale/dashboard"
                    p={2}
                    rounded="md"
                    _hover={{ bg: "gray.700" }}
                >
                    設定
                </Link>
                <Link
                    href="/sale/dashboard"
                    p={2}
                    rounded="md"
                    _hover={{ bg: "gray.700" }}
                >
                    レポート出力
                </Link>
            </Flex>
            <IconButton
                color={"black"}
                background={"green.400"}
                icon={isOpen ? <CloseIcon /> : <HamburgerIcon />}
                aria-label="Toggle Navigation"
                onClick={isOpen ? onClose : onOpen}
                display={{ md: "none" }}
                position="fixed"
                top={4}
                left={4}
            />
        </Box>
    );
};

export default Sidebar;
