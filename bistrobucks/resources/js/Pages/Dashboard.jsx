import ResponsiveNavLink from "@/Components/ResponsiveNavLink";
import Sidebar from "@/Layouts/Sidebar";
import { ChevronDownIcon, HamburgerIcon, CloseIcon } from "@chakra-ui/icons";
import {
    Box,
    HStack,
    Icon,
    Image,
    Menu,
    MenuButton,
    MenuList,
    MenuItem,
    Button,
    Text,
    VStack,
} from "@chakra-ui/react";
import { Head, Link } from "@inertiajs/react";
import React, { useState, useEffect } from "react";
import { FaUserLarge } from "react-icons/fa6";
import { RiLogoutBoxRFill } from "react-icons/ri";

export default function Dashboard(props) {
    const { title, metaDescription, userName } = props; // プロップスから値を取得
    const [showSidebar, setShowSidebar] = useState(false); // サイドバーの表示状態

    // サイドバーの表示切り替え
    const toggleSidebar = () => {
        setShowSidebar(!showSidebar);
    };

    // ハンバーガーメニューの表示切り替え
    useEffect(() => {
        const handleResize = () => {
            if (window.innerWidth >= 768) {
                setShowSidebar(false);
            }
        };
        window.addEventListener("resize", handleResize); // イベントリスナーの登録
        return () => {
            window.removeEventListener("resize", handleResize); // イベントリスナーの解除
        };
    }, []);

    return (
        <>
            {/* Head要素 */}
            <Head title={title}>
                <meta charSet="UTF-8" />
                <meta
                    name="viewport"
                    content="width=device-width, initial-scale=1.0"
                />
                <meta name="description" content={metaDescription} />
                <meta name="robots" content="index,follow" />
            </Head>
            {/* ヘッダー */}
            <Box as="header">
                <HStack
                    justifyContent={"space-between"}
                    alignItems={"center"}
                    p={{ base: 2 }}
                    mr={{ base: 2, md: 4 }}
                    bgGradient="linear(to-t,blue.100,blue.200,blue.400)"
                    borderRadius={"md"}
                    w={"100%"}
                >
                    <Link href="/dashboard">
                        <Image
                            src="img/bbIcon.png"
                            alt="BistroBucks Icon"
                            ml={{ md: 4 }}
                            boxSize={{ base: "60px" }}
                            borderRadius="xl"
                            _hover={{ opacity: 0.8 }}
                        />
                    </Link>
                    {/* バーガーメニュー */}
                    <Box>
                        <HamburgerIcon
                            boxSize={8}
                            display={{ base: "block", md: "none" }}
                            _hover={{ cursor: "pointer" }}
                            onClick={toggleSidebar}
                            color={"white"}
                        />
                    </Box>
                    {/* ユーザーメニュー */}
                    <Menu>
                        <MenuButton
                            as={Button}
                            rightIcon={<ChevronDownIcon />}
                            boxShadow={"outline"}
                            bgColor={"white"}
                        >
                            <Box>
                                <Text>{userName ? userName : "No name"}</Text>
                            </Box>
                        </MenuButton>
                        <MenuList>
                            <MenuItem as="a" href={route("profile.edit")}>
                                <HStack>
                                    <Icon as={FaUserLarge} boxSize={4} />
                                    <Text>プロフィール</Text>
                                </HStack>
                            </MenuItem>
                            <MenuItem>
                                <ResponsiveNavLink
                                    method="post"
                                    href={route("logout")}
                                >
                                    <HStack>
                                        <Icon
                                            as={RiLogoutBoxRFill}
                                            boxSize={4}
                                        />
                                        <Text>ログアウト</Text>
                                    </HStack>
                                </ResponsiveNavLink>
                            </MenuItem>
                        </MenuList>
                    </Menu>
                </HStack>
            </Box>
            {/* サイドバー */}
            {showSidebar && (
                <>
                    {/* オーバーレイ */}
                    <Box
                        position="absolute"
                        top="0"
                        left="0"
                        width="100%"
                        height="100vh"
                        bg="rgba(0, 0, 0, 0.5)"
                        zIndex="9"
                    />

                    {/* サイドバー */}
                    <Box
                        position="absolute"
                        width="100%"
                        height="100vh"
                        top={10}
                        zIndex="10"
                    >
                        <VStack>
                            <Box width="80%" position="relative">
                                <CloseIcon
                                    position="absolute"
                                    top={5}
                                    right={5}
                                    alignItems={"center"}
                                    boxSize={6}
                                    _hover={{ cursor: "pointer" }}
                                    onClick={toggleSidebar}
                                />
                                {/* サイドバーの中身 */}
                                <Box>
                                    <Sidebar />
                                </Box>
                            </Box>
                        </VStack>
                    </Box>
                </>
            )}
            <Box display={{ base: "none", md: "block" }} width="16%">
                <Sidebar />
            </Box>
        </>
    );
}
