/* This class is part of the XP framework's EAS connectivity
 *
 * $Id: ClassWrapper.java 6601 2006-02-14 13:30:40Z friebe $
 */

package net.xp_framework.easc.reflect;

import java.io.Serializable;

/**
 * Wrapper type for Java classes
 *
 */
public class ClassWrapper implements Serializable {
    public transient Class referencedClass;

    public ClassWrapper(Class c) {
        this.referencedClass= c;
    }
}
